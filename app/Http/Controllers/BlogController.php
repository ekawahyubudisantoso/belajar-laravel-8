<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('blogs', [
            "title" => "Blogs",
            // "posts" => Blog::all()
            "blogs" => Blog::latest()->get()
        ]);
    }

    public function show(Blog $blog){
        return view('blog', [
            "title" => $blog->title,
            "blog"  => $blog
        ]);
    }
}
