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
Route::get('posts/{post}', function ($slug) {
    $post = Post::find($slug);

    if (!$post) {
        return redirect('/')->with('error', 'Post not found.');
    }

    return view('post-content', [
        'post' => $post,
    ]);
});