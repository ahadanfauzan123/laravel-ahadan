<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function index() {

        $title = '';
        if(request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in '.$category->name;
        }
        if(request('author')) {
            $author = User::firstWhere('user_name', request('author'));
            $title = ' by '.$author->name;
        }
        //Post::all() berarti mengambil semua data dari table Post dari database dan dikirimkan ke pages.posts
        return view('pages.posts', [
            "title" => "All Posts".$title,
            "isActive" => "blog",
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(10)->withQueryString()
        ]);
        //filter() berasal dari nama function di model "scopeFilter" dan paginate menggantikan get
        //request mengambil data dari tag input yang mempunyai atribut name "search"
    }
    //mengambil parameter dari tag button di view lalu mengambil informasi dari table Post berdasarkan parameter id dengan Post::find($id)
    public function show( Post $post) {
    return view('pages.post', [
        "title" => "post",
        "isActive" => "blog",
        "post" => /*Post::find($post)*/$post]);
    }
    //route model binding, artinya tinggal memanggil nama model sebagai parameter dan buat variable yang namanya sesuai dengan wildcard yang ada di file route
    //ini dilakukan untuk menghindari pencarian data melalui id yang cukup beresiko
}
