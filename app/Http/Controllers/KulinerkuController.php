<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuliner;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Forum;
use App\Models\Komentar;

class KulinerkuController extends Controller
{
   public function index()
    {
         $kuliner = \App\Models\Kuliner::all();
       
      
         return view ('kulinerku',['kuliner' => $kuliner]);

    }
      public function show(Kuliner $kuliner, Post $post, Forum $forum)
    {
        $forum= Forum::orderBy('created_at','desc')->paginate(10);
        return view('kuliner1',compact('kuliner','forum'),compact('post'));

    }
     public function tampilkan(Kuliner $kuliner, Post $post)
    {
        return view('ratingkuliner',compact('kuliner'),compact('post'));
    }
    
}
