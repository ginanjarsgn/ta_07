<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/keluar', function(){
    \Auth::logout();
    return redirect('/');
});

Route::get('/destination', function () {
    return view('destination');
});
Route::get('/kulinerku', function () {
    return view('kulinerku');
});
Route::get('/cinderamataku', function () {
    return view('cinderamataku');
});
Route::get('/akomodasiku', function () {
    return view('akomodasiku');
});

/*Route::get('/info', function () {
    return view('info');
});*/
Route::get('/login2', function () {
    return view('login2');
});

/*Membuat Detail Dari Produk*/
Route::get('/destination1', function () {
    return view('destination1');
});
Route::get('/posts', function () {
    return view('posts');
});

Route::get('/kuliner1', function () {
    return view('kuliner1');
});
Route::get('/cinderamata1', function () {
    return view('cinderamata1');
});
Route::get('/akomodasiku1', function () {
    return view('akomodasiku1');
});


Route::get('/login2', function () {
    return view('login2');
})->name('login2');

Route::post('/postLogin', 'App\Http\Controllers\LoginController@postLogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout');
Route::get('/register', 'App\Http\Controllers\LoginController@getRegister');
Route::post('/register','App\Http\Controllers\LoginController@postRegister')->name('register');

//Wisatas
Route::get('/wisata', 'App\Http\Controllers\WisataController@index');
Route::get('/wisata/create', 'App\Http\Controllers\WisataController@create');
Route::get('/wisata/{wisata}', 'App\Http\Controllers\WisataController@show');
Route::post('/wisata/create', 'App\Http\Controllers\WisataController@store');
Route::delete('/wisata/{wisata}', 'App\Http\Controllers\WisataController@destroy');
Route::get('/wisata/{wisata}/edit', 'App\Http\Controllers\WisataController@edit');
Route::patch('/wisata/{wisata}', 'App\Http\Controllers\WisataController@update');

//Kuliner
Route::get('/kuliner', 'App\Http\Controllers\KulinerController@index');
Route::get('/kuliner/create', 'App\Http\Controllers\KulinerController@create');
Route::get('/kuliner/{kuliner}', 'App\Http\Controllers\KulinerController@show');
Route::post('/kuliner/create', 'App\Http\Controllers\KulinerController@store');
Route::delete('/kuliner/{kuliner}', 'App\Http\Controllers\KulinerController@destroy');
Route::get('/kuliner/{kuliner}/edit', 'App\Http\Controllers\KulinerController@edit');
Route::patch('/kuliner/{kuliner}', 'App\Http\Controllers\KulinerController@update');

//Cinderamata
Route::get('/cinderamata', 'App\Http\Controllers\CinderamataController@index');
Route::get('/cinderamata/create', 'App\Http\Controllers\CinderamataController@create');
Route::get('/cinderamata/{cinderamata}', 'App\Http\Controllers\CinderamataController@show');
Route::post('/cinderamata/create', 'App\Http\Controllers\CinderamataController@store');

Route::delete('/cinderamata/{cinderamata}', 'App\Http\Controllers\CinderamataController@destroy');

Route::get('/cinderamata/{cinderamata}/edit', 'App\Http\Controllers\CinderamataController@edit');

Route::patch('/cinderamata/{cinderamata}', 'App\Http\Controllers\CinderamataController@update');

//Akomodasi
Route::get('/akomodasi', 'App\Http\Controllers\AkomodasiController@index');
Route::get('/akomodasi/create', 'App\Http\Controllers\AkomodasiController@create');
Route::get('/akomodasi/{akomodasi}', 'App\Http\Controllers\AkomodasiController@show');
Route::post('/akomodasi/create', 'App\Http\Controllers\AkomodasiController@store');
Route::delete('/akomodasi/{akomodasi}', 'App\Http\Controllers\AkomodasiController@destroy');
Route::get('/akomodasi/{akomodasi}/edit', 'App\Http\Controllers\AkomodasiController@edit');
Route::patch('/akomodasi/{akomodasi}', 'App\Http\Controllers\AkomodasiController@update');


//Informasi
Route::get('/informasi', 'App\Http\Controllers\InformasiController@index');
Route::get('/informasi/create', 'App\Http\Controllers\InformasiController@create');
Route::get('/informasi/{informasi}', 'App\Http\Controllers\InformasiController@show');
Route::post('/informasi/create', 'App\Http\Controllers\InformasiController@store');
Route::delete('/informasi/{informasi}', 'App\Http\Controllers\InformasiController@destroy');
Route::get('/informasi/{informasi}/edit', 'App\Http\Controllers\InformasiController@edit');
Route::patch('/informasi/{informasi}', 'App\Http\Controllers\InformasiController@update');




Route::get('/postsShow/{wisata}', 'App\Http\Controllers\RateController@posts')->name('posts');
Route::post('posts', 'App\Http\Controllers\RateController@postPost')->name('posts.post');
Route::get('posts/{id}', 'App\Http\Controllers\RateController@show')->name('posts.show');



Route::get('/kulinerku', 'App\Http\Controllers\KulinerkuController@index');
Route::get('/cinderamataku', 'App\Http\Controllers\CinderamatakuController@index');
Route::get('/', 'App\Http\Controllers\InfoController@index');
Route::get('/akomodasiku', 'App\Http\Controllers\AkomodasikuController@index');
Route::get('/destination', 'App\Http\Controllers\DestinationController@index');
Route::get('/destination1/{wisata}', 'App\Http\Controllers\DestinationController@show');


Route::get('/kuliner1/{kuliner}', 'App\Http\Controllers\KulinerkuController@show');
Route::get('/cinderamata1/{cinderamata}', 'App\Http\Controllers\CinderamatakuController@show');
Route::get('/akomodasiku1/{akomodasi}', 'App\Http\Controllers\AkomodasikuController@show');
Route::get('/info1/{informasi}', 'App\Http\Controllers\InfoController@show');


Route::group(['middleware' => 'auth'], function(){

    Route::group(['middleware' => 'aksesPengguna'], function(){
        Route::get('/forum', 'App\Http\Controllers\ForumController@index');
        Route::get('/forum/create', 'App\Http\Controllers\ForumController@create');
        Route::post('/forum/create', 'App\Http\Controllers\ForumController@store');
        Route::get('/forum/{id_forum}/view','App\Http\Controllers\ForumController@view');
        Route::post('/forum/{id_forum}/view','App\Http\Controllers\ForumController@postKomentar');
        Route::get('/rating/{wisata}', 'App\Http\Controllers\DestinationController@tampilkan'); 
        Route::get('/rating', 'App\Http\Controllers\DestinationController@tampilkan');
        Route::get('/ratingkuliner/{kuliner}', 'App\Http\Controllers\KulinerkuController@tampilkan');
        Route::get('/ratingkuliner', 'App\Http\Controllers\KulinerkuController@tampilkan');
    });
    Route::group(['middleware' => 'cekRole'], function(){
        Route::get('/wisata', 'App\Http\Controllers\WisataController@index');
        Route::get('/kuliner', 'App\Http\Controllers\KulinerController@index');
        Route::get('/cinderamata', 'App\Http\Controllers\CinderamataController@index');
        Route::get('/akomodasi', 'App\Http\Controllers\AkomodasiController@index');
        Route::get('/informasi', 'App\Http\Controllers\InformasiController@index');
    });
});

Route::get('/bla123', 'App\Http\Controllers\CobaController@coba');