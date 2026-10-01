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
                <a href="{{ route('blog.show', $post) }}"
                   class="group block overflow-hidden rounded-lg bg-white shadow transition-all hover:-translate-y-1 hover:shadow-xl">

                    {{-- Gambar Thumbnail --}}
                    <div class="relative h-56 overflow-hidden bg-grey-50">
                        <img src="{{ asset('storage/' . $post->image) }}"
                             alt="{{ $post->title }}"
                             loading="lazy"
                             class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" />

                        <span class="absolute right-4 bottom-4 rounded-full border-2 border-white px-5 py-2 text-center font-body text-xs font-bold uppercase text-white md:text-sm">
                            Read More
                        </span>
                    </div>

                    {{-- Konten --}}
                    <div class="p-6">
                        <span class="block font-body text-lg font-semibold text-black group-hover:text-primary">
                            {{ $post->title }}
                        </span>
                        <span class="mt-2 block font-body text-sm text-grey-20">
                            {{ \Illuminate\Support\Str::limit($post->excerpt, 120) }}
                        </span>
                        <div class="mt-4 flex items-center justify-between text-xs text-grey-40">
                            <span>{{ $post->published_at?->format('d M Y') }}</span>
                            <span class="font-bold uppercase text-primary">{{ $post->category }}</span>
                        </div>
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