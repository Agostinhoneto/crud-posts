<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        $categories = Category::all();
        //dd($categories);
        $posts = Post::where('published', true)->paginate(20);
        return view('posts.index', compact('posts','categories'));
    }

    public function category($id)
    {
        $categories = Category::with(['posts' => function($query) {
            $query->published();
        }])->orderBy('title', 'asc')->get();

        // \DB::enableQueryLog();
        $posts = Post::with('author')
                    ->latestFirst()
                    ->published()
                    ->where('category_id', $id)
                    ->simplePaginate($this->limit);

         return view("posts.index", compact('posts', 'categories'));

        //  dd(\DB::getQueryLog());
    }

    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    public function author(User $author)
    {
        $authorName = $author->name;
        $posts = $author->posts()
            ->with('category')
            ->latestFirst()
            ->published()
            ->simplePaginate($this->limit);

        return view("posts.index", compact('posts', 'name'));
    }


    public function create()
    {
        $authors = Author::all();
        return view('posts.create', ['authors' => $authors]);
    }


    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $arquivo = $request->file('image');
            $nomeArquivo = $arquivo->getClientOriginalName();
            $arquivo->storeAs('', $nomeArquivo, 'local');
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = $request->input('slug');
        $post->content = $request->input('content');
        $post->published = $request->input('published');
        $post->author_id = $request->input('author_id');
        $post->image = $arquivo;

        $post->save();

        return redirect('/posts')->with('success', 'Post criado com sucesso!');
    }

    public function edit(Post $post)
    {
        $authors = Author::all();
        return view('posts.edit', ['post' => $post, 'authors' => $authors]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $request->merge([
            'published' => boolval($request->input('published', false)),
        ]);

        $post->update(
            $request->only([
                'title',
                'slug',
                'content',
                'published',
                'author_id',
            ])
        );

        return redirect('/posts')->with('success', 'Post Atualizado com sucesso!');
    }

    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts')->with('success', 'Post excluído com sucesso.');
    }
}
