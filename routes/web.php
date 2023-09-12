<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//require __DIR__.'/auth.php';

Route::get('/posts/index', [PostsController::class, 'index']);

//Route::get('/', [PostsController::class, 'home'])->name('home');
//Route::get('/search', [PostsController::class, 'search'])->name('search');
//Route::get('/category/{category:slug}', [PostsController::class, 'byCategory'])->name('by-category');
//Route::get('/{post:slug}', [PostsController::class, 'show'])->name('view');
