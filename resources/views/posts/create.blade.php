@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <h1>Criar Posts:</h1>
            <br>
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="4"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="published">Publicado</label>
                <input type="checkbox" name="published" value="1">
            </div>
            <br>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="opel">Opel</option>
                <option value="audi">Audi</option>
              </select>
            <div class="form-group">
                <select class="form-select" aria-label="Default select example" name="author_id">
                    @foreach ($authors as $author)
                        <option>selecione o Author</option>
                        <option value="{{ $author->id }}">
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br><br>
            <div>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
@endsection
