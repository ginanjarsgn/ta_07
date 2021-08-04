<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class InfoController extends Controller
{
    public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $informasi=\App\Models\Informasi::all();
        $data = array();
        foreach ($informasi as $coba) {
            array_push($data, array(
                'id_pengumuman' => $coba->id_pengumuman,
                'nama_pengumuman' => $coba->nama_pengumuman,
                'deskripsi' => $coba->deskripsi,
                'gambar' => $coba->gambar
                
            ));
        }
       
        return view ('welcome',compact('informasi'),compact('data'));
    }
    public function show(Informasi $informasi)
    {
        return view('info1',compact('informasi'));
    }
}
