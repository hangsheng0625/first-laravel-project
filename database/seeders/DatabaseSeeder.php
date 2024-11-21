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
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        
        // Now with this code, when we generate a post, it will also generate the user and category automatically since inside the PostFactory we use
        // User::factory() and Category::factory() to generate the user and category.
        Post::factory()->create();

        // $user = User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $persona = Category::create([
        //     'name' => 'Persona',
        //     'slug' => 'personal',
        // ]);

        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family',
        // ]);

        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work',
        // ]);

        // Post::create([
        //     'title' => 'My Family Post',
        //     'category_id' => $family->id,
        //     'user_id'=> $user->id,
        //     'excerpt' => 'This is my first post with Laravel',
        //     'content' => 'This is my first post with Laravel. I am so excited to learn Laravel.',
        // ]);

        // Post::create([
        //     'title' => 'My Work Post',
        //     'category_id' => $work->id,
        //     'user_id'=> $user->id,
        //     'excerpt' => 'This is my first post with Laravel',
        //     'content' => 'This is my first post with Laravel. I am so excited to learn Laravel.',
        // ]);

        // This is to show how we can randomly generate multiple posts for the same author
        // $user = User::factory()->create([
        //     'name' => 'Hang Sheng'
        // ]);

        // Post::factory(5)->create([
        //     'user_id' => $user->id,
        // ]);
    }
}
