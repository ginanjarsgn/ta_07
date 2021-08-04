<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuliner;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Forum;
use App\Models\Komentar;
use App\Models\Wisata;
use App\Models\Cinderamata;
use App\Models\Akomodasi;

class KulinerkuController extends Controller
{
   public function index()
    {
         $kuliner = \App\Models\Kuliner::all();
         $data = array();
        foreach ($kuliner as $coba) {
            array_push($data, array(
                'id_kuliner' => $coba->id_kuliner,
                'nama_kuliner' => $coba->nama_kuliner,
                'alamat' => $coba->alamat,
                'jenis_makanan'=>$coba->jenis_makanan,
                'deskripsi' => $coba->deskripsi,
                'gambar' => $coba->gambar,
                'post' => Post::where("name", $coba->nama_kuliner)->first()
            ));
        }
         if(auth()->user()){
            if(auth()->user()->role == "user"){
                //mendapatkan rating dengan user yang berbeda-beda
                $ratingsUser = \willvincent\Rateable\Rating::distinct()->get('user_id');
                //mendapatkan rating user berdasarkan id usernya
                $userExist = \willvincent\Rateable\Rating::where('user_id', auth()->user()->id)->get();

                $result_userExist = [];
                foreach ($userExist as $r) {
                    array_push($result_userExist, $r->id);
                }

                //matriks penampung rating dari user
                $fullProduk = [];
                //Dimensi pertama = mengisi id user
                
                foreach ($ratingsUser as $tu) {
                    $id_user = $tu->user_id;
                    $dataProdukUser = \willvincent\Rateable\Rating::where("user_id", $id_user)->get();
                    $dataProdukUser1 = \willvincent\Rateable\Rating::where("user_id", "=", $id_user)->avg("rating");
                    $produkArray = [];

                    //Dimensi kedua = mengisi rating dari masing-masing produk
                    
                    foreach ($dataProdukUser as $tpu) {
                        $produkArray[$tpu->rateable_id] = $tpu->rating;
                    }
                    $fullProduk[$id_user] = $produkArray;
                    // echo "<br/>";
                }

                // print_r($fullProduk);

                $fullProdukTranspos=[];
                
                foreach($fullProduk as $key=>$fp){
                    foreach($fp as $k=>$fpx){
                        $fullProdukTranspos[$k][$key] = $fpx;
                    }
                }
                
                
                if ($result_userExist!=null){
                    //menghitung similarity tiap produk (((penting)))
                    
                    // dd($fullProdukTranspos);
                    $sim = $this->getSimilarities($fullProdukTranspos);
                    // dd($sim);
                    
                    $final = $this->main(auth()->user()->id, $sim, $fullProdukTranspos);
                    // dd($final);
                }
                else if($result_userExist==null){
                    return view ('kulinerku')->with(['data' => $data, 'kuliner' => $kuliner, "rekomendasis" => array()]);
                }
                // $keys = array_column($final, 'hasil');
                array_multisort(array_column( $final, 'hasil' ), SORT_DESC, $final);
                // var_dump($new);


                $rekomendasi = array();
                foreach ($final as $destinasi) {
                    $post = Post::find($destinasi['id_produk']);
                    if($post->jenis == "kuliner"){
                        $kuliner2 =Kuliner::where("nama_kuliner", "=",$post->name)->first();
                        $item = [
                            "nama" => $kuliner2->nama_kuliner,
                            "alamat" => $kuliner2->alamat,
                            "prediksi_bintang" => $destinasi['hasil'],
                            "url" => "kuliner1/" . $kuliner2->id_kuliner,
                            "gambar" => $kuliner2->gambar
                        ];
                        array_push($rekomendasi, $item);
                    }
                    // else if($post->jenis == "kuliner"){
                    //     $kuliner2 = Kuliner::where("nama_kuliner", "=",$post->name)->first();
                    //     $item = [
                    //         "nama" => $kuliner2->nama_kuliner,
                    //         "alamat" => $kuliner2->alamat,
                    //         "prediksi_bintang" => $destinasi['hasil'],
                    //         "url" => "kuliner1/" . $kuliner2->id_kuliner,
                    //         "gambar" => $kuliner2->gambar
                    //     ];
                    //     array_push($rekomendasi, $item);
                    // }else if($post->jenis == "toko"){
                    //     $toko2 = Wisata::where("nama_toko", "=",$post->name)->first();
                    //     $item = [
                    //         "nama" => $toko->nama_toko,
                    //         "alamat" => $toko2->alamat,
                    //         "prediksi_bintang" => $destinasi['hasil'],
                    //         "url" => "cinderamata1/" . $toko2->id_cinderamata,
                    //         "gambar" => $toko2->gambar
                    //     ];
                    //     array_push($rekomendasi, $item);
                    // }else if($post->jenis == "akomodasi"){
                    //     $akomodasi2 = Wisata::where("nama_akomodasi", "=",$post->name)->first();
                    //     $item = [
                    //         "nama" => $akomodasi2->nama_akomodasi,
                    //         "alamat" => $akomodasi2->alamat,
                    //         "prediksi_bintang" => $destinasi['hasil'],
                    //         "url" => "akomodasi1/" . $akomodasi2->id_akomodasi,
                    //         "gambar" => $akomodasi2->gambar
                    //     ];
                    //     array_push($rekomendasi, $item);
                    // }

                }
                return view ('kulinerku')->with(['data' => $data, 'kuliner' => $kuliner, "rekomendasis" => $rekomendasi]);

            }else{
                return view ('kulinerku')->with(['data' => $data, 'kuliner' => $kuliner]);
            }

        }else{
            return view ('kulinerku')->with(['data' => $data, 'kuliner' => $kuliner]);
        }

     }
      public function show(Kuliner $kuliner, Post $post, Forum $forum)
    {
        $post = Post::where("name", $kuliner->nama_kuliner)->first();
         $forum= Forum::where("id", $kuliner->id_kuliner)->where("jenis",'kuliner')->orderBy('created_at','desc')->paginate(10);

        return view('kuliner1',compact('kuliner','forum'),compact('post'));


    }
    public function bawah($produk1, $produk2, $rata_rata, $member1, $member2, $idUser)
    {
        $totalProduk1 = 0;
        $totalProduk2 = 0;
        // echo "<br/>" .$produk1 . "  " . $produk2 . "<br/>";

        $parameter = 0;
        foreach($member1 as $k1=>$p1){
            if ($parameter == sizeof($idUser)) {
                break;
            }
            foreach ($member2 as $k2=>$p2) {
                if($k1 == $k2){
        
                    $totalProduk1 += pow(number_format($p1 - $rata_rata[$idUser[$parameter]],4), 2);
                    
                    $totalProduk2 += pow(number_format($p2 - $rata_rata[$idUser[$parameter]],4), 2);
                    $parameter += 1;
                }
            }
            
        }

        $hasil = number_format(number_format(sqrt($totalProduk1),4) * number_format(sqrt($totalProduk2),4),4);
       // echo "<br/>bawah $produk1 dan $produk2 : $hasil<br/>";
        return $hasil;
    }

    public function atasCoba($produk1, $produk2, $rata_rata, $member1, $member2, $idUser)
    {
        (float)$total = 0;
        
        
        foreach($member1 as $k1=>$p1){
            foreach ($member2 as $k2=>$p2) {
                foreach ($idUser as $user) {
                    if($k1==$user & $k2==$user){
                        $total += (($p1 - $rata_rata[$user])*($p2 - $rata_rata[$user]));
                    }
                }
            }

        }
        // echo "<br/>atas $produk1 dan $produk2 : $total<br/>";
        return $total;
    }


     public function getSimilarities($fullProduk){
        $rata_rata = [];
        //mencari user
        $ratingsUser = \willvincent\Rateable\Rating::distinct()->get('user_id');
        foreach ($ratingsUser as $tu){
            $dataProdukUser1 = \willvincent\Rateable\Rating::where("user_id", "=", $tu->user_id)->avg("rating");
            $rata_rata[$tu->user_id] = number_format($dataProdukUser1,2);
        }
        //rata-rata si rating dari setiap user
        // dd($rata_rata);
        
        //udah ditranspos ((((penting))))
        // $rata = $this->getRata($fullProduk);
        $hasil = [];
        foreach ($fullProduk as $k1 => $v1) {
        
            foreach ($fullProduk as $k2 => $v2){

                $subhasil = 0;
                if($k1 != $k2){
                    $idUser = [];
                    $parameter = 0;
                    foreach ($v1 as $coba11 => $coba12) {
                        foreach ($v2 as $coba21 => $coba22){
                            if($coba11 == $coba21){
                                $parameter += 1;
                                array_push($idUser, $coba11);
                            }
                        }
                    }

                    

        
                    if($parameter >= 1){
        
                        $atas = $this->atasCoba($k1, $k2, $rata_rata, $v1, $v2, $idUser);
                        $bawah = $this->bawah($k1, $k2, $rata_rata, $v1, $v2, $idUser);
                        if($bawah != 0){
                            $subhasil = $atas/$bawah;
                        }else{
                            $subhasil = 0;
                        }
                    }else{
                        $subhasil = 0;
                    }
                    
                    
                 
                    $hasil[$k1][$k2] = (float)number_format($subhasil,4);
                }
            }
        }
        return $hasil;
    }

    public function main($member, $similarities, $fullProduk)
    {
        $hasil = [];
        foreach($fullProduk as $key=>$fp){
            foreach($fp as $k=>$fpx){
                $produkSorted[$k][$key] = $fpx;
            }
        }
        // dd($similarities);
        // dd($produkSorted);
        // echo "<pre>";print_r($similarities);echo "</pre><br/><br/>";
        // echo "<pre>";print_r($produkSorted);echo "</pre><br/><br/>";
        foreach($similarities as $np=>$sim){
            foreach($produkSorted[$member] as $key=>$value){
                if($np == $key){
                    // echo "$np + $key <br/>";
                    continue 2;
                }
            }
            // echo "<br/>";
            $atas = 0;
            $bawah = 0;
            foreach($produkSorted[$member] as $key=>$value){
                if (isset($similarities[$np][$key])) {
                    if($similarities[$np][$key] > 0){
                        $atas += $value * $similarities[$np][$key];   
                        // $bawah += $similarities[$np][$key];
                    }
                }
                
            }"$np : ";
            foreach($similarities[$np] as $sim){
                if ($sim > 0) {
                    // echo "$sim +";
                    $bawah += $sim;
                }
            }
            // echo "<br/>$np : atas = $atas<br/>";
            // echo "$np : bawah = $bawah<br/>";
            if ($bawah > 0 && $atas > 0) {
                // $hasil[$np]['similarities'] = $similarities[$np];
                // $hasil[$np]['atas'] = $atas;
                // $hasil[$np]['bawah'] = $bawah;
                $hasil[$np]['hasil'] = $atas/$bawah;
                $hasil[$np]['id_produk'] = $np;
            }
        }
        return $hasil;
    }

     public function getRata($produk){
        $rata = [];
        
        foreach($produk as $key=>$value){
            $total = 0;
            foreach($value as $k=>$v){
                $total += $v;       
            }
            $rata[$key] = $total/sizeof($value);
            
        }
        // print_r($rata);
        return $rata;
    }
     
    
}
