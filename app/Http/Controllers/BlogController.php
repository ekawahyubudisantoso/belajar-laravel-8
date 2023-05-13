<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

class BlogController extends Controller
{
    public function index(){

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if (request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        return view('blogs', [
            "title"     => "All Posts" .$title,
            "active"    => 'blogs',
            "blogs"     => Blog::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
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
