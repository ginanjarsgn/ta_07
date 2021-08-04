<?php

namespace App\Http\Controllers;

use App\Models\Cinderamata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\UserController;

class CinderamataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cinderamata = DB::table('cinderamatas')->simplepaginate(4);
       
        return view ('cinderamata.cinderamata',['cinderamata' => $cinderamata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Cinderamata $cinderamata)
    {
        return view('cinderamata.create',compact('cinderamata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
        // Wisata::create($request->all());
        $tambah = new Cinderamata;
        $tambah->nama_toko = $request->nama_toko;
        $tambah->alamat = $request->alamat;
        $tambah->jenis_cinderamata = $request->jenis_cinderamata;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->gambar = $namaGambar;
        $tambah->save();

        $post = new Post;
        $post->name = $request->nama_toko;
        $post->jenis = "toko";
        $post->save();

        return redirect('/cinderamata')->with('status','Data Cinderamata Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cinderamata  $cinderamata
     * @return \Illuminate\Http\Response
     */
    public function show(Cinderamata $cinderamata)
    {
       return view('cinderamata.show',compact('cinderamata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cinderamata  $cinderamata
     * @return \Illuminate\Http\Response
     */
    public function edit(Cinderamata $cinderamata)
    {
      return view('cinderamata.edit',compact('cinderamata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cinderamata  $cinderamata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cinderamata $cinderamata)
    {   $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
        Cinderamata::where ('id_cinderamata',$cinderamata->id_cinderamata)
         ->update([

            'nama_toko'=>$request->nama_toko,
            'alamat'=>$request->alamat,
            'jenis_cinderamata'=>$request->jenis_cinderamata,
            'deskripsi'=>$request->deskripsi,
            'gambar'=> $namaGambar

         ]);
         return redirect('/cinderamata')->with('status','Data Cinderamata Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cinderamata  $cinderamata
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cinderamata $cinderamata)
    {
       Cinderamata::destroy($cinderamata->id_cinderamata);
        return redirect('/cinderamata')->with('status','Data Cinderamata Berhasil Dihapus!');
    }
}
