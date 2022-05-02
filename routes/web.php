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
Route::get('/', [BlogController::class, 'index'])->name('home');

//Create Blog - create method
Route::get('blog/create', [BlogController::class, 'create'])->middleware('auth');

//Submit New Blog - store method
Route::post('blog/store', [BlogController::class, 'store'])->middleware('auth');

//Blog Route - show method
Route::get('blog/{post:slug}', [BlogController::class, 'show']);

























Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
