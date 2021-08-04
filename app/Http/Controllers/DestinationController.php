<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Forum;
use App\Models\Komentar;
use App\Models\Kuliner;
use App\Models\Cinderamata;
use App\Models\Akomodasi;


class DestinationController extends Controller
{
     public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $wisata=\App\Models\Wisata::all();
        $data = array();
        foreach ($wisata as $coba) {
            array_push($data, array(
                'id_wisata' => $coba->id_wisata,
                'nama_wisata' => $coba->nama_wisata,
                'alamat' => $coba->alamat,
                'deskripsi' => $coba->deskripsi,
                'gambar' => $coba->gambar,
                'post' => Post::where("name", $coba->nama_wisata)->first()
            ));
        }

        if(auth()->user()){
            if(auth()->user()->role == "user"){
                //mendapatkan rating dengan user yang berbeda-beda, disticnt=tidak ada yg sama
                $ratingsUser = \willvincent\Rateable\Rating::distinct()->get('user_id');
                //mendapatkan rating user berdasarkan id usernya, mengambil rating user yg login skrg
                $userExist = \willvincent\Rateable\Rating::where('user_id', auth()->user()->id)->get();

                $result_userExist = [];
                foreach ($userExist as $r) {
                    array_push($result_userExist, $r->id);
                }

                //penampung rating dari user
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
                // dd($fullProduk);

                // print_r($fullProduk);

                $fullProdukTranspos=[];
                
                foreach($fullProduk as $key=>$fp){
                    foreach($fp as $k=>$fpx){
                        $fullProdukTranspos[$k][$key] = $fpx;
                    }
                }
                // dd($fullProdukTranspos);
                
                
                if ($result_userExist!=null){
                    
                    
                    // dd($fullProdukTranspos);
                    $sim = $this->getSimilarities($fullProdukTranspos);
                    // dd($sim);
                    
                    $final = $this->main(auth()->user()->id, $sim, $fullProdukTranspos);
                    // dd($final);
                }
                else if($result_userExist==null){
                    return view ('destination')->with(['data' => $data, 'wisata' => $wisata, "rekomendasis" => array()]);
                }
                // $keys = array_column($final, 'hasil');
                array_multisort(array_column( $final, 'hasil' ), SORT_DESC, $final);
                // var_dump($new);


                $rekomendasi = array();
                foreach ($final as $destinasi) {
                    $post = Post::find($destinasi['id_produk']);
                    if($post->jenis == "wisata"){
                        $wisata2 = Wisata::where("nama_wisata", "=",$post->name)->first();
                        $item = [
                            "nama" => $wisata2->nama_wisata,
                            "alamat" => $wisata2->alamat,
                            "prediksi_bintang" => $destinasi['hasil'],
                            "url" => "destination1/" . $wisata2->id_wisata,
                            "gambar" => $wisata2->gambar
                        ];
                        array_push($rekomendasi, $item);
                    }
                   

                }
                return view ('destination')->with(['data' => $data, 'wisata' => $wisata, "rekomendasis" => $rekomendasi]);

            }else{
                return view ('destination')->with(['data' => $data, 'wisata' => $wisata]);
            }

        }else{
            return view ('destination')->with(['data' => $data, 'wisata' => $wisata]);
        }
        
    }
        

    
    public function show(Wisata $wisata, Forum $forum)
    {
        $post = Post::where("name", $wisata->nama_wisata)->first();
        $forum= Forum::where("id", $wisata->id_wisata)->where("jenis",'wisata')->orderBy('created_at','desc')->paginate(10);
        return view('destination1',compact('wisata','forum'),compact('post'));
    }
     public function tampilkan(Post $post, Wisata $wisata)
    {
        //compact berfungsi untuk melakukan passing data dari controller ke view.
        return view('rating',compact('post'), compact('wisata'));
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
            //sqrt = akar kuadrat
            //pow = memangkatkan suatu bilangan 
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

//---2---
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

    //---1---
     public function getSimilarities($fullProduk){
        $rata_rata = [];
        ////mendapatkan rating dengan user yang berbeda-beda, disticnt=tidak ada yg sama
        $ratingsUser = \willvincent\Rateable\Rating::distinct()->get('user_id');
        foreach ($ratingsUser as $tu){
            //mendapatkan rata" rating user berdasarkan id usernya
            $dataProdukUser1 = \willvincent\Rateable\Rating::where("user_id", "=", $tu->user_id)->avg("rating");
            $rata_rata[$tu->user_id] = number_format($dataProdukUser1,4);
        }
            // dd($rata_rata);
       
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
    //weighted sum
    public function main($member, $similarities, $fullProduk)
    {
        $hasil = [];
        foreach($fullProduk as $key=>$fp){
            foreach($fp as $k=>$fpx){
                $produkSorted[$k][$key] = $fpx;
            }
        }
        // dd($member);
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

                
                
            }
            foreach($similarities[$np] as $sim){
                if ($sim > 0) {
                    // echo "$sim +";
                    $bawah += $sim;
                }
               
            }
            // echo "<br/>$np : atas = $atas<br/>";
            // echo "$np : bawah = $bawah<br/>";
            if ($bawah > 0 && $atas > 0) {
                
                $hasil[$np]['hasil'] = $atas/$bawah;
                $hasil[$np]['id_produk'] = $np;
            }
        }
        // dd($hasil);
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
