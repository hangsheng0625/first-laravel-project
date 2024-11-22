<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;

// Home page ("Welcome to my Blog")
Route::get('/', function () { 
    $posts = Post::latest();

    if(request('search')){
        $posts
            ->where('title', 'like', '%'.request('search').'%')
            ->orWhere('content', 'like', '%'.request('search').'%');
    }

    return view('post-title', [
        'posts' => $posts->get(),
        'categories'=> Category::all(),
    ]);
});

// Show all posts titles
Route::get('/posts', function () {
    $posts = Post::latest()->get();

    return view('post-title', [
        'posts' => $posts,
    ]);
});

// Show individual post
Route::get('posts/{post:slug}', function (Post $post) {
    // dd($post);
    return view('post-content', [
        'post' => $post->load(['category', 'user']),
    ]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category-posts', [
        'category' => $category,
        'posts' => $category->posts()->with(['category', 'user'])->latest()->get(),
        'currentCategory' => $category,
    ]);
});


