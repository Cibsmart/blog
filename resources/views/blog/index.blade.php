<x-app-layout>

    <x-slot name="title">Blog Posts</x-slot>

    <x-slot name="header">
        Blog Posts
    </x-slot>

    <div class="max-w-3xl mx-auto bg-white p-8">
        @auth
            <a href="/blog/create">Create Post</a>
        @endauth

        <div class="space-y-5">
        @foreach($posts as $post)
            <article class="border rounded p-4">
                <h1 class="font-black text-2xl hover:text-blue-400">
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                </h1>

                <span class="text-xs font-bold text-gray-500">
                    By: <a href="/?author={{ $post->author->id }}">{{ $post->author->name }}</a>
                </span>

                <div class="text-xs font-bold text-gray-500">
                    Tags: 
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">tech</span>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">php</span>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">laravel</span>
                    <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">javascript</span>
                </div>

                <p>{{ $post->excerpt }}</p>    
            </article>
        @endforeach
        </div>

        <div class="mt-2">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>