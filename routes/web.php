<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('myBlog');
});

Route::get('/post', function () {
    return view('post');
});