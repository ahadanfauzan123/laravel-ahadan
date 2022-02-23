<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {
        //Post::all() berarti mengambil semua data dari table Post dari database dan dikirimkan ke pages.posts
        return view('pages.posts', ["title" => "blog", "posts" => Post::with(['author', 'category'])->latest()->get()]);
    }
    //mengambil parameter dari tag button di view lalu mengambil informasi dari table Post berdasarkan parameter id dengan Post::find($id)
    public function show( Post $post) {
    return view('pages.post', ["title" => "post", "post" => /*Post::find($post)*/$post]);
    }
    //route model binding, artinya tinggal memanggil nama model sebagai parameter dan buat variable yang namanya sesuai dengan wildcard yang ada di file route
    //ini dilakukan untuk menghindari pencarian data melalui id yang cukup beresiko
}
