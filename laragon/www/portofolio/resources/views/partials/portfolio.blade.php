<div class="container py-16 md:py-20" id="portfolio">
    <h2 class="text-center font-header text-4xl font-semibold uppercase text-primary sm:text-5xl lg:text-6xl">
        Check out my Portfolio
    </h2>
    <h3 class="pt-6 text-center font-header text-xl font-medium text-black sm:text-2xl lg:text-3xl">
        Here's what I have done with the past
    </h3>

    <div class="mx-auto grid w-full grid-cols-1 gap-8 pt-12 sm:w-3/4 md:gap-10 lg:w-full lg:grid-cols-2">
        @forelse($portfolios as $portfolio)
            <a href="{{ route('portfolio.show', $portfolio) }}"
               class="group mx-auto block transform overflow-hidden rounded-lg bg-white shadow transition-all hover:scale-105 md:mx-0">

                <div class="relative">
                    <img src="{{ asset('storage/' . $portfolio->image) }}"
                         loading="lazy"
                         class="w-full"
                         alt="{{ $portfolio->title }}" />

                    <div class="absolute inset-0 flex flex-col items-center justify-center bg-primary bg-opacity-80 opacity-0 transition-opacity group-hover:opacity-100">
                        <h4 class="px-6 text-center font-header text-lg font-bold uppercase text-white">
                            {{ $portfolio->title }}
                        </h4>
                        @if($portfolio->category)
                            <span class="mt-2 rounded-full bg-yellow px-4 py-1 font-body text-xs font-bold uppercase text-primary">
                                {{ $portfolio->category }}
                            </span>
                        @endif
                    </div>
                </div>
            </a>
        @empty
            <p class="col-span-2 text-center text-grey-40">
                Belum ada portfolio. Tambahkan di panel admin.
            </p>
        @endforelse
    </div>

    @if($portfolios->count() > 0)
        <div class="mt-12 text-center">
            <a href="{{ route('portfolio.index') }}"
               class="inline-flex items-center rounded bg-primary px-8 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
                Lihat Semua Portfolio
                <i class="bx bx-right-arrow-alt ml-2 text-xl"></i>
            </a>
        </div>
    @endif
</div>