<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }
namespace App\Models;

class Post {
    private static $blog_posts = [
        
            [
                "title" => "post pertama",
                "slug" => "post-pertama",
                "author" => "ahadan fauzan",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo dolore expedita sed ullam ex doloribus inventore tempora sapiente fuga distinctio a numquam possimus, minus excepturi? Maiores porro obcaecati quam."
            ],
            [
                "title" => "post kedua",
                "slug" => "post-kedua",
                "author" => "ahadan fauzan",
                "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nemo dolore expedita sed ullam ex doloribus inventore tempora sapiente fuga distinctio a numquam possimus, minus excepturi? Maiores porro obcaecati quam."
            ]
        
            ];

    public static function all () {
        return collect(self::$blog_posts);
    } 
    public static function find($slug) {
        $posts = static::all();
    //     // $posts = self::$blog_posts;
    //     $post = [];
    // foreach($posts as $p) {
    //     if($p["slug"] === $slug) {
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);

    }
}