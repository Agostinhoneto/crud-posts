<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostsController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

//Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//require __DIR__.'/auth.php';

//Posts
Route::get('/posts', [PostsController::class,'index'])->name('posts.index');
Route::get('/posts/{post}', [PostsController::class,'show'])->name('posts.show');
Route::get('/create',[PostsController::class, 'create'])->name('posts.create');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/edit/{post}', [PostsController::class, 'edit'])->name('posts.edit');
Route::post('/posts/update/{post}', [PostsController::class, 'update'])->name('posts.update');
Route::get('/posts/delete/{post}', [PostsController::class, 'delete'])->name('posts.delete');
Route::get('/posts/author/{post}', [PostsController::class, 'author'])->name('posts.author');

// Catogories //
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/categories/create',[CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}/edit',[CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}/update',[CategoryController::class, 'update'])->name('categories.update');;
Route::delete('/categories/{id}/delete', [CategoryController::class, 'delete'])->name('categories.delete');;
