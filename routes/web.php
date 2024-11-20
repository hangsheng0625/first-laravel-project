<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Home page ("Welcome to my Blog")
Route::get('/', function () {
    return view('my-blog');
});

// Show all posts titles
Route::get('/posts', function () {
    $posts = Post::all();

    return view('post-title', [
        'posts' => $posts,
    ]);
});

// Show individual post
Route::get('posts/{post}', function (Post $post) {
    return view('post-content', [
        'post' => $post,
    ]);
});

Route::get('posts/{post}', function (Post $post) {
    return view('post-content', [
        'post' => $post->load('category'), // Eager load the category
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category-posts', [
        'category' => $category,
        'posts' => $category->posts,
    ]);
});