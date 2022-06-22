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

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- <div>
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug">
            @error('slug')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div> -->

        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" >
            <!-- @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>

        <div>
            <label for="excerpt">Excerpt:</label>
            <input type="text" name="excerpt" id="excerpt" value="{{ old('excerpt') }}" >
            <!-- @error('excerpt')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="50" rows="5">{{ old('body') }}</textarea>
            <!-- @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror -->
        </div>

        <div class="flex">
            @foreach($tags as $id => $name)
                <div>
                    <input type="checkbox" id="{{ $id }}" name="tags[]" value="{{ $id }}" />
                    <label for="{{ $id }}">{{ $name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit">Create</button>
    </form>
</body>
</html>
