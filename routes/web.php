<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

// Home page ("Welcome to my Blog")
Route::get('/', function () {
    return view('my-blog');
});

// Show all post titles
Route::get('/posts', function () {
    $posts = File::files(resource_path('posts'));

    $posts = array_map(function ($file) {
        return [
            'slug' => basename($file, '.html'),
            'title' => basename($file, '.html') // Can be improved to extract meaningful titles
        ];
    }, $posts);

    return view('post-title', [
        'posts' => $posts
    ]);
});

// Show individual post
Route::get('posts/{post}', function ($slug) {
    $path = resource_path("posts/{$slug}.html");

    if (!file_exists($path)) {
        return redirect('/');
    }

    $post = file_get_contents($path);

    return view('post-content', [
        'post' => $post
    ]);
});
