<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Wisata;


class BerandaController extends Controller
{
    public function page1()
    {
    	return view('/wisata');
    }
    public function page2()
    {
    	return view('/rating');
    }
    
}
