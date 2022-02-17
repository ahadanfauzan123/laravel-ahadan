<?php


use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
    return view('pages.index', ["title" => "home"]);
});
Route::get('/about', function() {
    return view('pages.about', [
        "title" => "about",
        "name" => "Muhammad Ahadan",
        "email" => "ahadanfauzan123@gmail.com"
    ]);
});

Route::get('/blog', [PostController::class, "index"]);
//halaman single post
Route::get('/blog/{slug}', [PostController::class, "show"]);