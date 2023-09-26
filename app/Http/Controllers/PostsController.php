<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    protected $limit = 3;

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

    public function author(User $author)
    {
        dd($author);
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
        $authors = Author::all();
        $posts = Post::find($id);

        return view('posts.edit', ['posts' => $posts, 'authors' => $authors]);
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


    /*
    public function uploadArquivo(Request $request)
    {
        $request->validate([
            'arquivo' => 'required|file|mimes:pdf,doc,docx|max:2048', // Defina as regras de validação do arquivo
        ]);

        if ($request->hasFile('arquivo')) {
            $arquivo = $request->file('arquivo');

            // Defina um nome único para o arquivo (por exemplo, timestamp + nome original do arquivo)
            $nomeArquivo = time() . '_' . $arquivo->getClientOriginalName();

            // Mova o arquivo para o diretório de destino (por exemplo, storage/app/arquivos)
            $arquivo->storeAs('arquivos', $nomeArquivo);

            // Você pode salvar o nome do arquivo no banco de dados se necessário
            // Exemplo: $registro->arquivo = $nomeArquivo;
            // $registro->save();

            return redirect()->back()->with('success', 'Arquivo enviado com sucesso!');
        }

        return redirect()->back()->with('error', 'Erro ao enviar arquivo.');
    }
    */
}
