<x-app-layout>

    <x-slot name="title">Blog Posts</x-slot>

    <x-slot name="header">
        Blog Posts
    </x-slot>

    <div class="mx-auto max-w-lg">
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
    </div>
</x-app-layout>