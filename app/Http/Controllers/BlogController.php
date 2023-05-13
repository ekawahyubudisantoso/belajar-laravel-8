<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('blogs', [
            "title"     => "All Posts Blogs",
            "active"    => 'blogs',
            "blogs"     => Blog::latest()->get()
        ]);
    }

    public function show(Blog $blog){
        return view('blog', [
            "title"     => $blog->title,
            "active"    => 'blogs',
            "blog"      => $blog
        ]);
    }
}
