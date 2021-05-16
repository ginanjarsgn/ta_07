<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;
use App\Models\Post;
use App\Models\Forum;
use App\Models\Komentar;


class DestinationController extends Controller
{
     public function index()
    {
        /*$wisata = DB::table('wisatas')->get();*/

        $wisata=\App\Models\Wisata::all();
        

        
        return view ('destination',compact('wisata'));

    }
     public function show(Wisata $wisata, Forum $forum)
    {
        $post = Post::where("name", $wisata->nama_wisata)->first();
        $forum= Forum::orderBy('created_at','desc')->paginate(10);
        return view('destination1',compact('wisata','forum'),compact('post'));
    }
     public function tampilkan(Post $post, Wisata $wisata)
    {
        return view('rating',compact('post'), compact('wisata'));
    }
    
}
