<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Wisata;
use App\Models\Post;


class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $wisata = DB::table('wisatas')->simplepaginate(4);
       
        return view ('wisata.wisata',['wisata'=>$wisata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Wisata $wisata)
    {
         return view('wisata.create',compact('wisata'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* $wisata = new Wisata;
        $wisata->nama_wisata= $request->nama_wisata;
        $wisata->alamat= $request->alamat;
        $wisata->deskripsi= $request->deskripsi;

        $wisata->save();*/

        $request->validate([
            'nama_wisata'=>'required',
            'alamat'=>'required',
            'deskripsi'=>'required'
            
        ]);

        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
        // Wisata::create($request->all());
        $tambah = new Wisata;
        $tambah->nama_wisata = $request->nama_wisata;
        $tambah->alamat = $request->alamat;
        $tambah->deskripsi = $request->deskripsi;
        $tambah->gambar = $namaGambar;
        $tambah->save();

        $post = new Post;
        $post->name = $request->nama_wisata;
        $post->jenis = "wisata";
        $post->save();

        return redirect('/wisata')->with('status','Data Wisata Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Wisata $wisata)
    {
        return view('wisata.show',compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Wisata $wisata)
    {
        return view('wisata.edit',compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wisata $wisata)
    {
        $namaGambar = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('image'), $namaGambar);
         Wisata::where ('id_wisata',$wisata->id_wisata)
         ->update([

            'nama_wisata'=>$request->nama_wisata,
            'alamat'=>$request->alamat,
            'deskripsi'=>$request->deskripsi,
            'gambar'=> $namaGambar

         ]);
         
        // dd($request->gambar);
         // echo $request->gambar;
         return redirect('/wisata')->with('status','Data Wisata Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wisata $wisata)
    {
        Wisata::destroy($wisata->id_wisata);
        return redirect('/wisata')->with('status','Data Wisata Berhasil Dihapus!');
    }
}
