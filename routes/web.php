<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Home Route - index method
Route::get('/', [BlogController::class, 'index']);

//Create Blog - create method
Route::get('blog/create', [BlogController::class, 'create']);

//Submit New Blog - store method
Route::post('blog/store', function (Request $request) {

    // $post = new Blog;

    // $post->slug = $request->slug;
    // $post->title = $request->title;
    // $post->excerpt = $request->excerpt;
    // $post->body = $request->body;

    // $post->save();

    $request->validate([
        'slug' => ['required', 'max:255'],
        'title' => ['required'],
        'excerpt' => ['required'],
        'body' => ['required'],
    ]);

    Blog::create([
        'slug' => $request->slug,
        'title' => $request->title,
        'excerpt' => $request->excerpt,
        'body' => $request->body,
    ]);

    return redirect()->to('/');

});

//Blog Route - show method
Route::get('blog/{post:slug}', function (Blog $post) {

    return view('blog', ['post' => $post]);
});

























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
