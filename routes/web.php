<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
    return view('pages.index', [
        "title" => "home",
        "isActive" => "home"
    ]);
});
Route::get('/about', function() {
    return view('pages.about', [
        "title" => "about",
        "isActive" => "about",
        "name" => "Muhammad Ahadan",
        "email" => "ahadanfauzan123@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);
//halaman single post
Route::get('/blog/{post:slug}', [PostController::class, "show"]);

Route::get('/categories', [CategoryController::class, "index"]);

//ketika sudah melakukan hubungan di model maka menampilkan singgle post melalui route model binding sudah tidak dibutuhkan
//maka function dibawah akan dihapus karena single post menuju blog?author=
// Route::get('/categories/{category:slug}', [CategoryController::class, "show"]);

// Route::get('/author/{author:user_name}', [UserController::class, 'index']);

//halaman login
Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);