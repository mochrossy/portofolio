<div class="bg-grey-50" id="clients">
    <div class="container py-16 md:py-20">
        <div class="mx-auto w-full sm:w-3/4 lg:w-full">
            <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
                My latest clients
            </h2>

            <div class="flex flex-wrap items-center justify-center pt-4 sm:pt-4">
                @forelse($clients as $client)
                    <span class="m-8 block">
                        <a href="{{ $client->website_url ?? '#' }}"
                           target="_blank"
                           title="{{ $client->name }}">
                            <img src="{{ asset('storage/' . $client->logo) }}"
                                 alt="{{ $client->name }}"
                                 class="mx-auto block h-12 w-auto grayscale transition-all duration-300 hover:grayscale-0" />
                        </a>
                    </span>
                @empty
                    <p class="py-8 text-center text-grey-40">
                        Belum ada klien. Tambahkan di panel admin.
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</div>