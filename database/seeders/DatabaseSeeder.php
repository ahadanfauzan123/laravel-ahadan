<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(15)->create();

        User::create([
            'name' => 'ahadan',
            'email' => 'ahadanfauzan123@gmail.com',
            'password' => bcrypt('ahadan130904'),
        ]);
        User::create([
            'name' => 'rashif',
            'email' => 'rashif123@gmail.com',
            'password' => bcrypt('rashif130904'),
        ]);

        Post::create([
            'category_id'=> 1,
            'user_id' => 1,
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum neque ex illum error iure iusto consequuntur? Nesciunt eius obcaecati dolor magni maiores maxime! Dolorem, expedita, necessitatibus corrupti aspernatur cupiditate velit vel quia in quisquam veniam qui sint non doloribus illo. sit amet consectetur adipisicing elit. Quis amet minima magni.</p>'
        ]);
        Post::create([
            'category_id'=> 1,
            'user_id' => 2,
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum neque ex illum error iure iusto consequuntur? Nesciunt eius obcaecati dolor magni maiores maxime! Dolorem, expedita, necessitatibus corrupti aspernatur cupiditate velit vel quia in quisquam veniam qui sint non doloribus illo. sit amet consectetur adipisicing elit. Quis amet minima magni.</p>'
        ]);
        Post::create([
            'category_id'=> 2,
            'user_id' => 1,
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum neque ex illum error iure iusto consequuntur? Nesciunt eius obcaecati dolor magni maiores maxime! Dolorem, expedita, necessitatibus corrupti aspernatur cupiditate velit vel quia in quisquam veniam qui sint non doloribus illo. sit amet consectetur adipisicing elit. Quis amet minima magni.</p>'
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Desain 3D',
            'slug' => 'desain-3d'
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);
    }
}
