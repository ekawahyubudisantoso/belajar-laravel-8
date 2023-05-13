<?php

use App\Models\Blog;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

use App\Models\Category;
use App\Models\User;


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
        "title"     => "Home",
        "active"    => 'home',
    ]);
});

Route::get('/about', function (){
    return view('about', [
        "title"     => "About",
        "active"    => 'about',
        "name"      => "Eka Wahyu Budi Santoso",
        "email"     => "ekawahyubudisantoso22@gmail.com"
    ]);
});

Route::get('blogs', [BlogController::class, 'index']);

Route::get('blog/{blog:slug}', [BlogController::class, 'show']);

Route::get('categories', function(){
    return view('categories',[
        'title'         => 'List Category',
        'active'        => 'categories',
        'categories'    => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category){
    return view('blogs',[
        'title'     => "Post by Category: $category->name",
        'active'    => 'categories',
        'blogs'     => $category->blogs->load('category', 'author')
    ]);
});

Route::get('authors/{author:username}', function(User $author){
    return view('blogs', [
        'title'     => "Post by Author: $author->name",
        'blogs'     => $author->blogs->load('category', 'author')
    ]);
});
