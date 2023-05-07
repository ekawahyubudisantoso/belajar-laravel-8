<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/about', function (){
    return view('about', [
        "title" => "About",
        "name"  => "Eka Wahyu Budi Santoso",
        "email" => "ekawahyubudisantoso22@gmail.com"
    ]);
});

Route::get('blogs', function (){

    $blog_posts = [
        [
            "title"     => "Postingan pertama",
            "slug"      => "judul-postingan-pertama",
            "author"    => "Eka Wahyu Budi Santoso",
            "body"      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit optio veniam libero perspiciatis adipisci cumque perferendis quo exercitationem iste. Tenetur reprehenderit aperiam perferendis hic odit doloribus in quo ratione exercitationem eos natus voluptatibus dolorum accusamus earum, quam culpa neque sunt odio! Doloremque maxime impedit facere amet adipisci voluptatum animi illo officiis provident repellendus sit consectetur eum, explicabo totam sapiente eius natus odit ex rerum, ullam dolor velit obcaecati? Eos placeat accusamus voluptatum quis. Quos, totam? Illo ut error consequuntur vero architecto expedita dignissimos ullam non quam! Natus nisi mollitia delectus, beatae suscipit blanditiis recusandae odio quos, fuga assumenda, maiores voluptatem."
        ],
        [
            "title"     => "Postingan kedua",
            "slug"      => "judul-postingan-kedua",
            "author"    => "Eka Wahyu Budi Santoso",
            "body"      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit optio veniam libero perspiciatis adipisci cumque perferendis quo exercitationem iste. Tenetur reprehenderit aperiam perferendis hic odit doloribus in quo ratione exercitationem eos natus voluptatibus dolorum accusamus earum, quam culpa neque sunt odio! Doloremque maxime impedit facere amet adipisci voluptatum animi illo officiis provident repellendus sit consectetur eum, explicabo totam sapiente eius natus odit ex rerum, ullam dolor velit obcaecati? Eos placeat accusamus voluptatum quis. Quos, totam? Illo ut error consequuntur vero architecto expedita dignissimos ullam non quam! Natus nisi mollitia delectus, beatae suscipit blanditiis recusandae odio quos, fuga assumenda, maiores voluptatem."
        ],
    ];

    return view('blogs', [
        "title" => "Blogs",
        "posts" => $blog_posts
    ]);
});

Route::get('blog/{slug}', function ($slug) {

    $blog_posts = [
        [
            "title"     => "Postingan pertama",
            "slug"      => "judul-postingan-pertama",
            "author"    => "Eka Wahyu Budi Santoso",
            "body"      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit optio veniam libero perspiciatis adipisci cumque perferendis quo exercitationem iste. Tenetur reprehenderit aperiam perferendis hic odit doloribus in quo ratione exercitationem eos natus voluptatibus dolorum accusamus earum, quam culpa neque sunt odio! Doloremque maxime impedit facere amet adipisci voluptatum animi illo officiis provident repellendus sit consectetur eum, explicabo totam sapiente eius natus odit ex rerum, ullam dolor velit obcaecati? Eos placeat accusamus voluptatum quis. Quos, totam? Illo ut error consequuntur vero architecto expedita dignissimos ullam non quam! Natus nisi mollitia delectus, beatae suscipit blanditiis recusandae odio quos, fuga assumenda, maiores voluptatem."
        ],
        [
            "title"     => "Postingan kedua",
            "slug"      => "judul-postingan-kedua",
            "author"    => "Eka Wahyu Budi Santoso",
            "body"      => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Suscipit optio veniam libero perspiciatis adipisci cumque perferendis quo exercitationem iste. Tenetur reprehenderit aperiam perferendis hic odit doloribus in quo ratione exercitationem eos natus voluptatibus dolorum accusamus earum, quam culpa neque sunt odio! Doloremque maxime impedit facere amet adipisci voluptatum animi illo officiis provident repellendus sit consectetur eum, explicabo totam sapiente eius natus odit ex rerum, ullam dolor velit obcaecati? Eos placeat accusamus voluptatum quis. Quos, totam? Illo ut error consequuntur vero architecto expedita dignissimos ullam non quam! Natus nisi mollitia delectus, beatae suscipit blanditiis recusandae odio quos, fuga assumenda, maiores voluptatem."
        ],
    ];
    
    $new_post = [];
    foreach ($blog_posts as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('blog', [
        "title" => "Single Post",
        "post"  => $new_post
    ]);
});
