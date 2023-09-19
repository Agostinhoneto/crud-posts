<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach ($posts as $post)
                    </li>
                        <x-post-list-item :post="$post" />
                     <li>
                        <a href="{{ url('posts/' . $post->id) }}" title="Ver Posts">
                            <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true">
                                </i> View
                            </button>
                        </a>

                @endforeach
            </div>
            <div>
                {{ $posts->links('pagination::tailwind') }}
            </div>
        </section>
    </div>
</x-app-layout>
