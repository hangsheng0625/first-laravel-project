<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>All Blog Posts</h1>

    <div class="posts">
        @foreach ($posts as $post)
            <article class="post-preview">
                <h2>
                    <a href="/posts/{{ $post['id'] }}">
                        {{ ucwords(str_replace('-', ' ', $post['title'])) }}
                    </a>
                </h2>
            </article>
        @endforeach
    </div>

    <a href="/">Back to Home</a>
</body>
</html>