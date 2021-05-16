<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinderamata;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class CinderamatakuController extends Controller
{
     public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $cinderamata=\App\Models\Cinderamata::all();
       
        return view ('cinderamataku',['cinderamata'=>$cinderamata]);
    }
    public function show(Cinderamata $cinderamata)
    {
        return view('cinderamata1',compact('cinderamata'));
    }
}
