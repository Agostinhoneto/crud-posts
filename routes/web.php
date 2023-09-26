<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//require __DIR__.'/auth.php';

Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/{id}', [PostsController::class,'show'])->name('posts.show');
Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{id}', [PostsController::class, 'edit'])->name('posts.edit');
Route::post('/posts/update/{id}', [PostsController::class, 'update'])->name('posts.update');
Route::get('/posts/delete/{id}', [PostsController::class, 'delete'])->name('posts.delete');
Route::get('/posts/author/{id}', [PostsController::class, 'author'])->name('posts.author');
