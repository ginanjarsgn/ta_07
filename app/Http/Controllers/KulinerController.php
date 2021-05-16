<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $kuliner = DB::table('kuliners')->simplepaginate(4);
       
        return view ('kuliner.kuliner',['kuliner' => $kuliner]);
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Kuliner $kuliner)
    {
         return view('kuliner.create',compact('kuliner'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

     /*  Kuliner::create($request->all());*/
        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
        // Wisata::create($request->all());
        $tambah = new Kuliner;
        $tambah->nama_kuliner = $request->nama_kuliner;
        $tambah->alamat = $request->alamat;
        $tambah->jenis_makanan = $request->jenis_makanan;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->gambar = $namaGambar;
        $tambah->save();

        $post = new Post;
        $post->name = $request->nama_kuliner;
        $post->jenis = "kuliner";
        $post->save();

        return redirect('/kuliner')->with('status','Data Kuliner Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function show(Kuliner $kuliner)
    {
        return view('kuliner.show',compact('kuliner'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function edit(Kuliner $kuliner)
    {
        return view('kuliner.edit',compact('kuliner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kuliner $kuliner)
    {
       $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
       Kuliner::where ('id_kuliner',$kuliner->id_kuliner)
         ->update([

            'nama_kuliner'=>$request->nama_kuliner,
            'alamat'=>$request->alamat,
            'jenis_makanan'=>$request->jenis_makanan,
            'deskripsi'=>$request->deskripsi,
            'gambar'=> $namaGambar

         ]);
         return redirect('/kuliner')->with('status','Data Kuliner Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kuliner  $kuliner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kuliner $kuliner)
    {
         Kuliner::destroy($kuliner->id_kuliner);
        return redirect('/kuliner')->with('status','Data Kuliner Berhasil Dihapus!');
    }
}
