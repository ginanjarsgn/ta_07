<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $informasi=\App\Models\Informasi::all();
       
        return view ('informasi.informasi',['informasi'=>$informasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Informasi $informasi)
    {
         return view('informasi.create',compact('informasi'));
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
        $tambah = new Informasi;
        $tambah->nama_pengumuman = $request->nama_pengumuman;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->gambar = $namaGambar;
        $tambah->save();

        return redirect('/informasi')->with('status','Data Pengumuman Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        return view('informasi.show',compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        return view('informasi.edit',compact('informasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
         $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
         Informasi::where ('id_pengumuman',$informasi->id_pengumuman)
         ->update([

            'nama_pengumuman'=>$request->nama_pengumuman,
            'deskripsi'=>$request->deskripsi,
            'gambar'=> $namaGambar

         ]);

        return redirect('/informasi')->with('status','Data Pengumuman Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy($informasi->id_pengumuman);
    return redirect('/informasi')->with('status','Data Pengumuman Berhasil Dihapus!');
    }
}
