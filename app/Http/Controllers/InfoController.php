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
       
        return view ('info',['informasi'=>$informasi]);
    }
    public function show(Informasi $informasi)
    {
        return view('info1',compact('informasi'));
    }
}
