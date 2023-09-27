@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Criar Categories:</h1>
            <br>
            <div class="form-group">
                <label for="title">Título*</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="content">Conteúdo</label>
                <textarea name="content" id="content" class="form-control" rows="4" required></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="published">Publicado</label>
                <input type="checkbox" name="published" value="1" @checked(old('published')) required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Author</label>
                <select name="author_id" class="form-control" id="exampleFormControlSelect1" required>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <input type="file" name="image">
            <br><br>
            <div>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </form>
    </div>
@endsection
