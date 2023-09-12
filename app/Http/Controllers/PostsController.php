<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index(){
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }
}
