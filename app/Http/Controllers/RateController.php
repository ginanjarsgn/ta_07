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
            'rate_akses' => 'required',
            'rate_pelayanan' => 'required'

            
        ]);

        $post = Post::find($request->id);

        $rating_fasilitas = $request->rate_fasilitas;
        $rating_akses = $request->rate_akses;
        $rating_pelayanan = $request->rate_pelayanan;
        
        $rate = (float)($rating_fasilitas + $rating_akses+ $rating_pelayanan )/3;
        if (\willvincent\Rateable\Rating::where("rateable_id", '=', $post->id)->where("user_id", "=", auth()->user()->id)->exists()) {
            $rating = \willvincent\Rateable\Rating::where("rateable_id", '=', $post->id)->where("user_id", "=", auth()->user()->id)->first();
            $rating->rating = $rate;
            $rating->save();
        }else{
            $rating = new \willvincent\Rateable\Rating;
            $post->fasilitas += $rating_fasilitas;
            $post->akses += $rating_akses;
            $post->pelayanan += $rating_pelayanan;
            $rating->rating = $rate;
            $rating->user_id = auth()->user()->id;
            $post->jumlah_vote += 1;
            $post->ratings()->save($rating);
            $post->save();
        }

        // $rating->rating_fasilitas = $rating_fasilitas;
        // $rating->rating_akses = $rating_akses;
        // $rating->rating_tempat = $rating_tempat;


        // $wisata = $request->id;
        $jenis = $post->jenis;
        if ($jenis == "wisata") {
            return redirect("/destination1/".$request->id2);
        }else if ($jenis == "kuliner") {
            return redirect("/kuliner1/".$request->id2);
        }else if ($jenis == "toko") {
            return redirect("/cinderamata1/".$request->id2);
        }else if ($jenis == "akomodasi") {
            return redirect("/akomodasiku1/".$request->id2);
        }

        // return redirect()->route("posts", ['wisata' => $wisata]);

    }
    public function tampilkan(Post $post, Wisata $wisata)
    {
        return view('rating',compact('post'), compact('wisata'));
    }





}