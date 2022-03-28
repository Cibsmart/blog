<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index(){

        $posts = Blog::latest()->get();
        
        return view('blogs', ['posts' => $posts]);
    }

    public function create() {

        return view('create');
    }

    public function store(Request $request) {
    
        $request->validate([
            'title' => ['required', 'unique:blogs,title'],
            'excerpt' => ['required'],
            'body' => ['required'],
        ]);

        $slug = str($request->title)->slug();
    
        Blog::create([
            'slug' => $slug,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);
    
        return redirect()->to('/');
    }

    public function show(Blog $post) {

        return view('blog', ['post' => $post]);
    }
}
