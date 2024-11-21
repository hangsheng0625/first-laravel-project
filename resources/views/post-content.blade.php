<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
    <h1>Welcome to the Post Page</h1>
    <p>This is a sample post page using Blade templating in Laravel.</p>
    </article>
    <a href="/">Back to Home</a>

    <article>
    <h1>Welcome to the Post Page</h1>
    <p>This is a sample post page using Blade templating in Laravel.</p>
    </article>
    <a href="/">Back to Home</a>

    <article>
    <h1>Welcome to the Post Page</h1>
    <p>This is a sample post page using Blade templating in Laravel.</p>
    </article>
    <a href="/">Back to Home</a>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
        <p>By <a href="#"> {{ $post->user->name }} </a> in {{ $post->category->name }}</p>
        <p>{!! $post->content !!}</p>
    </article>
    <a href="/posts">Back to Posts</a>
</body>
</html>
