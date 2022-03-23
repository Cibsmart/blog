<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Blog</title>
</head>
<body>
    <h1>Create Blog Posts</h1>
    
    <form action="/blog/store" method="POST">
        @csrf

        <div>
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" required>
            @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
        </div>

        <div>
            <label for="excerpt">Excerpt:</label>
            <input type="text" name="excerpt" id="excerpt">
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="50" rows="5"></textarea>
        </div>

        <button type="submit">Create</button>
    </form>
</body>
</html>