@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <textarea name="content" id="content" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="published">Publicado</label>
                    <input type="checkbox" name="published" value="1">
                </div>
                @foreach ($authors as $author)
                    {{ $author->name }}
                @endforeach
                <div>
                    <button type="submit" class="btn btn-primary">Criar Post</button>
                </div>
            </form>
        </div>
        <div>
        @endsection
