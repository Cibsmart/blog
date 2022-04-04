<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
</head>
<body>
    @auth
        <a href="/blog/create">Create Post</a>
    @endauth

    @foreach($posts as $post)
        <article>
            <h1><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <span>Author: {{ $post->author->name }}</span>
            <p>{{ $post->excerpt }}</p>    
        </article>
    @endforeach
    
</body>
</html>