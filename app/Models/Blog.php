<?php

namespace App\Models;

class Blog
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
