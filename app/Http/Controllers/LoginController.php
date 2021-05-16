<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class LoginController extends Controller
{
    public function index(){

        return view('/login2');
    }
    public function postLogin(Request $request){

    	/*dd($request->all());*/
    	if (Auth::attempt($request->only('email','password'))){
    		if (Auth::user()->role == "admin") {
                return redirect('/wisata');
            }else if(Auth::user()->role == "user"){
                return redirect('/');
            }
    	}
    	return redirect('login2');
    }
     public function logout(Request $request){

    	/*dd($request->all());*/
    	Auth::logout();
    	return redirect('/');
    }
     public function tampilkan(Wisata $wisata)
    {
        return view('rating',compact('wisata'));
    }
    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|min:6',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6|confirmed'
        ]); 
        User:: create([
            
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>'user',
            'password'=>bcrypt($request->password)
            
        ]);
       
        return redirect('/login2');
    }

}
