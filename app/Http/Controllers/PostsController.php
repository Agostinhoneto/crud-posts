<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', true)->paginate(20);
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $posts = Post::findOrFail($id);
        return view('posts.show', ['posts' => $posts]);
    }


    public function edit($id)
    {
        $posts = Post::find($id);
        return view('posts.edit',['posts' => $posts]);

    }


    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $posts->title = $request->input('title');
        $posts->save();
        return redirect()->route('posts.index');
    }

    public function destroy($id)
    {
        dd($id);
    }
}
