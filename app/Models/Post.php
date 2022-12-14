<?php

namespace App\Models;


class Post
{
   private static $blog_adzkar = [
    [
            "title" => "Post Doa Kesatu",
            "slug" => "post-doa-kesatu",
            "author" => "Hendri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur vel eum sapiente sint quibusdam assumenda ex! Perspiciatis non blanditiis dolore error excepturi quis animi eius, illum vero repudiandae sit id rem eveniet, voluptates nostrum praesentium, mollitia nesciunt sunt eligendi odio. Et, accusamus. Dignissimos, qui tempora? Maiores velit reiciendis id, consequuntur voluptates dolorum maxime non laboriosam facere et ipsum, suscipit labore ut esse cupiditate consectetur commodi saepe recusandae fugiat deserunt? Nobis quae exercitationem voluptatem nam cupiditate adipisci minus expedita, modi impedit."
    ],

    [
            "title" => "Post doa kedua",
            "slug" => "post-doa-kedua",
            "author" => "Hera",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, voluptatem! A ipsum soluta atque at. Voluptates asperiores esse necessitatibus ullam, labore magnam officia hic, dolore, dolor nisi molestiae quidem commodi neque incidunt ut eligendi tempore iure impedit obcaecati error quod quia voluptas aperiam dicta. Animi, possimus accusantium laudantium excepturi enim odio omnis magnam minima, ipsum inventore culpa officia consequuntur, ab blanditiis minus deleniti amet exercitationem atque dolore cumque illo maxime tenetur error quis? Repellat quibusdam libero, possimus illo ducimus nulla error? Porro soluta voluptatum blanditiis! Quidem perferendis quaerat repudiandae, sequi rerum architecto excepturi! A iste ipsa corrupti. Officia, iste nobis."
        
    ],
];

public static function all(){
// return -> jika akses variable biasa
// gunakan return self::$static file 
return collect(self::$blog_adzkar);
}

public static function find($slug){

    //buat tampungan dari data dengan variable
    $posts = static::all(); // diambil menggunakan self:: karena tipe variable private

    // $new_post = [];
    // foreach($posts as $p ){
    //     if($p["slug"] === $slug){
    //         $new_post = $p;
    //     }
    // }
    // return $new_post;

    return $posts->first();
 }
}
