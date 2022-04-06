<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    <article>
        <h1>{{ $post->title }}</h1>
        <span>Author: {{ $post->author->name }}</span>
        <p>{!! $post->body !!}</p>    
    </article>

    <a href="/">Go Back</a>
</body>
</html>