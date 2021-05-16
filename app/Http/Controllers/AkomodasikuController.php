<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akomodasi;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class AkomodasikuController extends Controller
{
   public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $akomodasi=\App\Models\Akomodasi::all();
       
        return view ('akomodasiku',['akomodasi'=>$akomodasi]);
    }
    public function show(Akomodasi $akomodasi)
    {
        return view('akomodasiku1',compact('akomodasi'));
    }
}
