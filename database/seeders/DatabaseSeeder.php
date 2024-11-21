<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $persona = Category::create([
            'name' => 'Persona',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'title' => 'My Family Post',
            'category_id' => $family->id,
            'user_id'=> $user->id,
            'excerpt' => 'This is my first post with Laravel',
            'content' => 'This is my first post with Laravel. I am so excited to learn Laravel.',
        ]);

        Post::create([
            'title' => 'My Work Post',
            'category_id' => $work->id,
            'user_id'=> $user->id,
            'excerpt' => 'This is my first post with Laravel',
            'content' => 'This is my first post with Laravel. I am so excited to learn Laravel.',
        ]);


    }
}
