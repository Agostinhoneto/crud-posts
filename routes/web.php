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

Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class, 'show'])->name('posts.show');
Route::get('/posts/edit/{id}', [PostsController::class, 'edit'])->name('posts.edit');
Route::put('/posts/update/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::delete('/posts/destroy/{id}', [PostsController::class, 'destroy'])->name('posts.destroy');
