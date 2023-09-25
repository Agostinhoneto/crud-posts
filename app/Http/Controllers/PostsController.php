<?php

namespace App\Http\Controllers;

use App\Models\Author;
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

    public function create()
    {
        $authors = Author::where('ativo' , true)->get();
        return view('posts.create', ['authors' => $authors]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->published = $request->input('published');
        $post->author_id = $request->input('author_id');
        $post->save();
        return redirect('/posts')->with('success', 'Post criado com sucesso!');
    }

    public function edit($id)
    {
        $authors = Author::where('ativo' , true)->get();
        $posts = Post::find($id);

        return view('posts.edit', ['posts' => $posts , 'authors' => $authors]);
    }

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $request->validate([
            'title' => 'required|string|max:255',
        ]);
        $posts->title = $request->input('title');
        $posts->slug = $request->input('slug');
        $posts->content = $request->input('content');
        $posts->published = $request->input('published');
        $posts->author_id = $request->input('author_id');
        $posts->save();
        return redirect('/posts')->with('success', 'Post Atualizado com sucesso!');;
    }

    public function delete($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return redirect('/posts')->with('error', 'Post não encontrado.');
        }
        $post->delete();
        return redirect('/posts')->with('success', 'Post excluído com sucesso.');
    }
}
