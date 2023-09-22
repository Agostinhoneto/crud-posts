@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <a href="{{ route('posts.index') }}" type="button" class="mt-4 mb-4 btn btn-primary">Posts</a>
        <div class="container mx-auto flex flex-wrap py-6">
            <div class="jumbotron">
                Title: {{ $posts->title }}
            </div>
        </div>
    </div>
@endsection
