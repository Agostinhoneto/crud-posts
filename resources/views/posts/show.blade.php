<x-app-layout>
    <div class="container mx-auto flex flex-wrap py-6">
        <!-- Posts Section -->
        <section class="w-full md:w-2/3  px-3">
            <div class=" flex flex-col items-center">
                @foreach ($posts as $post)
                    <x-post-list-item :post="$post" />
                @endforeach
            </div>
            <div>
            </div>
        </section>
    </div>
</x-app-layout>
