<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $category->name }}</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <h1>Posts in {{ $category->name }}</h1>
    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
    <a href="/">Back to Home</a>
</body>
</html>

{{-- @extends('layout')

@section('content')
    <h1>Posts in {{ ucwords($category->name) }} Category</h1>

    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                <p>{{ Str::limit($post->excerpt, 100) }}</p>
            </div>
        @endforeach
    </div>

    <div class="categories">
        <h2>Categories</h2>
        <ul>
            @foreach($categories as $category)
                <li><a href="/categories/{{ $category->slug }}">{{ ucwords($category->name) }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection --}}
