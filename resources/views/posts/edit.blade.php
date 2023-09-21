@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
    <h1>Editar Posts</h1>

    <form method="POST" action="{{ route('posts.update', $posts->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $posts->title }}">
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
</div>
</div>
    @endsection
