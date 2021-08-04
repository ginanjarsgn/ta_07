<?php

namespace App\Http\Controllers;

use App\Models\Akomodasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Http\Controllers\UserController;


class AkomodasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akomodasi = DB::table('akomodasis')->simplepaginate(4);
       
        return view ('akomodasi.akomodasi',['akomodasi' => $akomodasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Akomodasi $akomodasi)
    {
       return view('akomodasi.create',compact('akomodasi'));
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
        $tambah = new Akomodasi;
        $tambah->nama_akomodasi = $request->nama_akomodasi;
        $tambah->alamat = $request->alamat;
        $tambah->fasilitas = $request->fasilitas;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->gambar = $namaGambar;
        $tambah->save();

        $post = new Post;
        $post->name = $request->nama_akomodasi;
        $post->jenis = "akomodasi";
        $post->save();

        return redirect('/akomodasi')->with('status','Data Akomodasi Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function show(Akomodasi $akomodasi)
    {
        return view('akomodasi.show',compact('akomodasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Akomodasi $akomodasi)
    {
         return view('akomodasi.edit',compact('akomodasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Akomodasi $akomodasi)
    {   $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
        Akomodasi::where ('id_akomodasi',$akomodasi->id_akomodasi)
         ->update([

            'nama_akomodasi'=>$request->nama_akomodasi,
            'alamat'=>$request->alamat,
            'fasilitas'=>$request->fasilitas,
            'deskripsi'=>$request->deskripsi,
            'gambar'=> $namaGambar
            

         ]);
         return redirect('/akomodasi')->with('status','Data Penginapan Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akomodasi  $akomodasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Akomodasi $akomodasi)
    {
        Akomodasi::destroy($akomodasi->id_akomodasi);
        return redirect('/akomodasi')->with('status','Data Akomodasi Berhasil Dihapus!');
    }
}
