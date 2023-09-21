<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Criar Post</a>
        </div>
        <br>
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach ($posts as $post)
                    <x-post-list-item :post="$post" />


                    <div>
                        <a href="{{ url('posts/' . $post->id) }}" title="Ver Posts">
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true">Detalhes</i>
                            </button>
                        </a>
                    </div>

                    <div>
                        <a href="{{ url('posts/edit/' . $post->id) }}" title="Ver Posts">
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true">Editar</i>
                            </button>
                        </a>
                    </div>

                    <div>
                        <a href="{{ url('posts/destroy/' . $post->id) }}" title="Ver Posts">
                            <button class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true">Deletar</i>
                            </button>
                        </a>
                    </div>

                @endforeach
            </div>
            <div>
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </section>
    </div>
</x-app-layout>
