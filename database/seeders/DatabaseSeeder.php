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
        User::factory(4)->create();


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
        Category::create([
            'name' => 'Crypto',
            'slug' => 'crypto'
        ]);

        // Post::factory(20)->create();
         Post::factory(50)->create();
    }
}
