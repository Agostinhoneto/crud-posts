<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crud de Posts</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <div class="container">
        <div class="row">
            <div>
                <a href="{{ route('posts.create') }}" class="btn btn-primary">Criar Post</a>
            </div>
            <div class="container mx-auto flex flex-wrap py-6">
                <section class="w-full md:w-2/3  px-3">
                    <div class=" flex flex-col items-center">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
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
                    <div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>
</html>
