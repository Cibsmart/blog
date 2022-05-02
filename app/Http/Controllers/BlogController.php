<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    
    public function index(Request $request){

        $author_id = $request->query('author');

        $posts = Blog::query();

        if ($author_id) {
            $author = User::findOrFail($author_id);

            $posts = $author->posts();
        }

        $posts = $posts->latest()->paginate(5)->withQueryString();
        
        return view('blog.index', ['posts' => $posts]);
    }


    public function create() {

        return view('blog.create');
    }


    public function store(Request $request) {

        $request->validate([
            'title' => ['required', 'unique:blogs,title'],
            'excerpt' => ['required'],
            'body' => ['required'],
        ]);

        $slug = str($request->title)->slug();
    
        Blog::create([
            'author_id' => auth()->id(),
            'slug' => $slug,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
        ]);
    
        return redirect()->to('/');
    }


    public function show(Blog $post) {

        return view('blog.show', ['post' => $post]);
    }
}
