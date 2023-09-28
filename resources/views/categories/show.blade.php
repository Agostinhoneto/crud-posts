@extends('layouts.app')
@section('content')
<br>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post-item post-detail">
                        <div class="post-item-image">
                            <img src="{{$categories->title }}">
                        </div>
                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{ $categories->title }}</h1>
                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <a title="Detalhes do Categoria"></a>
                                    </li>
                                    <li><i class="fa fa-clock-o"></i>
                                        <time> {{ $categories->created_at }}</time>
                                    </li>
                                    <li><i class="fa fa-folder"></i>
                                        <a href=""></a>
                                    </li>
                                    <li><i class="fa fa-comments"></i><a href="#">4 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="post-author padding-10">
                    <div class="media">
                        <div class="media-left">
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">
                            </h4>
                            <div class="post-author-count">
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        @endsection
