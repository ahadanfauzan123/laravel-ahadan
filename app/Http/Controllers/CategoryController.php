<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index() {
        return view('pages.categories', [
            "title" => "categories",
            "isActive" => "categories",
            "categories" => Category::all(),
        ]);
    }

    public function show(Category $category) {
        return view('pages.posts', [
            "title" => $category->name,
            "isActive" => 'categories',
            "posts" => $category->posts->load('author', 'category'),
            // "category" => $category->name
        ]);
    }
}
