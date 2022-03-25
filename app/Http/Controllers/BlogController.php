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
}
