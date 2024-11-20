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