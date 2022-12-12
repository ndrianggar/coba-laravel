<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function(){
    return view('about', [ 
        "title" => "About",
        "nama" => "Hendri",
        "email" => "ndrianggar@gmail.com",
        "image" => "img/1.png"
    
    ]);
});


Route::get('/adzkar', function (){
    return view('adzkar', [
        "title" => "Adzkar",
        "posts" => Post::all() // manggil metode dengan ::
    ]);
});


// Halaman adzkar single
// {slug} = wild card untuk dapatkan parameter dan menjadi uri dalam url

Route::get('detailadzkar', function($slug){
    return view('detailadzkar', [
            "title" => "Detail Adzkar",
            "posts" => Post::find($slug)
    ]);
});