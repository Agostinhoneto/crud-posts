@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="{{ route('posts.create') }}" type="button" class="mt-4 mb-4 btn btn-primary">Inserir Posts</a>
        <div class="row">
                <section class="w-full md:w-2/3  px-3">
                    <div class=" flex flex-col items-center">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Id</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Slug</th>

                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row">#</th>
                                        <td>{{ $post->id }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->slug }}</td>
                                        <td>
                                            <a href="{{ url('posts/' . $post->id) }}" title="Ver Posts">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true">Detalhes</i>
                                                </button>
                                            </a>
                                            <a href="{{ url('posts/edit/' . $post->id) }}" title="Ver Posts">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true">Editar</i>
                                                </button>
                                            </a>
                                            <a href="{{ url('posts/destroy/' . $post->id) }}" title="Ver Posts">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true">Deletar</i>
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $posts->links('pagination::tailwind') }}
                    </div>
                </section>
            </div>
        </div>
@endsection

<script type="text/javascript">
    $(document).ready(function() {
        $('#dataTable').dataTable({
            "ordering": false
        })

    });
</script>
