<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;


Route::get('/', function () {
    return view('home', [
        "title" => "iPusnas | Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "iPusnas | Tentang iPusnas",
        "image" => "logoPerpus.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'iPusnas | Categorie',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/register', [RegisterController::class,'index'])->middleware('guest');;
Route::post('/register', [RegisterController::class,'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('admin');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('admin');