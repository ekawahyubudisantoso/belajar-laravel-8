<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        return view('blogs', [
            "title" => "Blogs",
            "posts" => Blog::all()
        ]);
    }

    public function show($slug){
        return view('blog', [
            "title" => "Single Post",
            "post"  => Blog::find($slug)
        ]);
    }
}
