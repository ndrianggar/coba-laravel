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
// error not found di url detail terdapat /{id} yg blm dimasukkan solve 14/12/2022
Route::get('detailadzkar/{slug}', function($slug){
    //  $blog_adzkar = [
    //     [
    //             "title" => "Post Doa Kesatu",
    //             "slug" => "post-doa-kedua",
    //             "author" => "Hendri",
    //             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vel eum sapiente sint quibusdam assumenda ex! Perspiciatis non blanditiis dolore error excepturi quis animi eius, illum vero repudiandae sit id rem eveniet, voluptates nostrum praesentium, mollitia nesciunt sunt eligendi odio. Et, accusamus. Dignissimos, qui tempora? Maiores velit reiciendis id, consequuntur voluptates dolorum maxime non laboriosam facere et ipsum, suscipit labore ut esse cupiditate consectetur commodi saepe recusandae fugiat deserunt? Nobis quae exercitationem voluptatem nam cupiditate adipisci minus expedita, modi impedit."
    //     ],
    
    //     [
    //             "title" => "Post doa kedua",
    //             "slug" => "post-doa-kedua",
    //             "author" => "Hera",
    //             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptatem! A ipsum soluta atque at. Voluptates asperiores esse necessitatibus ullam, labore magnam officia hic, dolore, dolor nisi molestiae quidem commodi neque incidunt ut eligendi tempore iure impedit obcaecati error quod quia voluptas aperiam dicta. Animi, possimus accusantium laudantium excepturi enim odio omnis magnam minima, ipsum inventore culpa officia consequuntur, ab blanditiis minus deleniti amet exercitationem atque dolore cumque illo maxime tenetur error quis? Repellat quibusdam libero, possimus illo ducimus nulla error? Porro soluta voluptatum blanditiis! Quidem perferendis quaerat repudiandae, sequi rerum architecto excepturi! A iste ipsa corrupti. Officia, iste nobis."
            
    //     ],
    // ];
    return view('detailadzkar', [
            "title" => "Detail Adzkar",
            "posts" => POST::find($slug),
    ]);
});