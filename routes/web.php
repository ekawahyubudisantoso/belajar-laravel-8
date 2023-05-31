<?php

use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;


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
        'active'    => 'blogs',
        'blogs'     => $author->blogs->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/blogs/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/blogs', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('is_admin');