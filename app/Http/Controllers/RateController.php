<?php



namespace App\Http\Controllers;
use App\Http\Controllers\UserController;

use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Post;



class RateController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('home');

    }



    public function posts(Post $post)

    {

        $posts = Post::all();

        return view('posts',compact('posts'));

    }



    public function show( Wisata $wisatas, $id)

    {
        $wisata = Wisata::where('nama_wisata', $id)->first();
        $post = Post::where('name', $id)->first();

        return view('postsShow',compact('post'),compact('wisata'));

    }



    public function postPost(Request $request)

    {

        request()->validate([
            'rate_fasilitas' => 'required',
            'rate_akses' => 'required'
            
        ]);

        $post = Post::find($request->id);



        $rating = new \willvincent\Rateable\Rating;
        $rating_fasilitas = $request->rate_fasilitas;
        $rating_akses = $request->rate_akses;
        $post->fasilitas += $rating_fasilitas;
        $post->akses += $rating_akses;
        $post->jumlah_vote += 1;
        $rate = (float)($rating_fasilitas + $rating_akses )/2;
        $rating->rating = $rate;
        // $rating->rating_fasilitas = $rating_fasilitas;
        // $rating->rating_akses = $rating_akses;
        // $rating->rating_tempat = $rating_tempat;

        $rating->user_id = auth()->user()->id;


        $post->ratings()->save($rating);
        $post->save();


        $wisata = $request->id;
        return redirect()->route("posts", ['wisata' => $wisata]);

    }
    public function tampilkan(Post $post, Wisata $wisata)
    {
        return view('rating',compact('post'), compact('wisata'));
    }





}