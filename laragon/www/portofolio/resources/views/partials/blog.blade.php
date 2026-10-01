<div class="bg-grey-50" id="blog">
    <div class="container py-16 md:py-20">
        <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
            I also like to write
        </h2>
        <h4 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
            Check out my latest posts!
        </h4>

        <div class="mx-auto grid w-full grid-cols-1 gap-6 pt-12 sm:w-3/4 lg:w-full lg:grid-cols-3 xl:gap-10">
            @forelse($posts as $post)
                <a href="{{ route('blog.show', $post) }}" class="shadow">
                    <div style="background-image: url('{{ asset('storage/' . $post->image) }}')"
                         class="group relative h-72 bg-cover bg-center bg-no-repeat sm:h-84 lg:h-64 xl:h-72">
                        <span class="absolute inset-0 block bg-gradient-to-b from-blog-gradient-from to-blog-gradient-to bg-cover bg-center bg-no-repeat opacity-10 transition-opacity group-hover:opacity-50"></span>
                        <span class="absolute right-0 bottom-0 mr-4 mb-4 block rounded-full border-2 border-white px-6 py-2 text-center font-body text-sm font-bold uppercase text-white md:text-base">
                            Read More
                        </span>
                    </div>
                    <div class="bg-white py-6 px-5 xl:py-8">
                        <span class="block font-body text-lg font-semibold text-black">
                            {{ $post->title }}
                        </span>
                        <span class="block pt-2 font-body text-grey-20">
                            {{ $post->excerpt }}
                        </span>
                    </div>
                </a>
            @empty
                <p class="col-span-3 text-center text-grey-40">
                    Belum ada post. Tambahkan di panel admin.
                </p>
            @endforelse
        </div>
    </div>
</div>