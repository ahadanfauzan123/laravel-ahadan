<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(User $author) {
        return view('pages.posts', [
            'title' => 'User Post',
            'posts' => $author->post->load('author', 'category')
        ]);
    }
}
