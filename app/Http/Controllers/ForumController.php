<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Forum;
use App\Models\Komentar;

class ForumController extends Controller
{
   public function index(){

   	$forum= Forum::orderBy('created_at','desc')->paginate(10);

   	return view('forum.index',compact(['forum']));
   }
    public function create(Forum $forum)
    {
         return view('forum.create',compact('forum'));

/*         dd($request->all());*/
    }
     public function store(Request $request)
    {
    	$request->request->add(['user_id'=>auth()->user()->id]);
    	$forum = Forum::create($request->all());
    	// /*return redirect*/('/destination1/{{request->id}}')->with('status','Forum Berhasil Ditambahkan!');
        return redirect()->back()->with('status','Forum Berhasil Ditambahkan!');
    }
    public function view(int $id_forum)
    {
    	$forum = Forum::where('id_forum', $id_forum)->get();
    	$komentars = Komentar::where('id_forum', $id_forum)->get();
        // dd($komentar);
        return view('forum.view',compact(['forum']),compact('komentars'));
    }
    public function postKomentar(Request $request, int $id_forum)
    {
    	$request->request->add(['user_id'=>auth()->user()->id]);
 		$request->request->add(['id_forum'=>$id_forum]);
    	$komentar = Komentar::create($request->all());
    	return redirect()->back()->with('status','Forum Berhasil Ditambahkan!');


    }

}
