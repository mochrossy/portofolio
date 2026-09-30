@extends('layouts.public')

@section('title', 'Portfolio')

@section('content')

    {{-- Header --}}
    <div class="bg-primary pt-6 pb-24 sm:pt-8 sm:pb-32">
        <div class="container text-center">
            <h1 class="font-header text-4xl font-semibold uppercase text-white sm:text-5xl lg:text-6xl">
                Portfolio
            </h1>
            <p class="pt-3 font-body text-base text-grey-50 sm:text-lg">
                Kumpulan project dan karya yang telah saya kerjakan
            </p>
        </div>
    </div>

    {{-- Filter & Grid --}}
    <div class="container -mt-16 mb-16">

        {{-- Filter --}}
        <div class="mb-8 flex flex-wrap items-center justify-center gap-2 rounded-lg bg-white p-4 shadow">
            <a href="{{ route('portfolio.index') }}"
               class="rounded-full px-5 py-2 font-header text-sm font-bold uppercase transition-colors
                      {{ !$activeCategory ? 'bg-primary text-white' : 'bg-grey-50 text-grey-40 hover:bg-primary hover:text-white' }}">
                Semua
            </a>
            @foreach($categories as $category)
                <a href="{{ route('portfolio.index', ['category' => $category]) }}"
                   class="rounded-full px-5 py-2 font-header text-sm font-bold uppercase transition-colors
                          {{ $activeCategory === $category ? 'bg-primary text-white' : 'bg-grey-50 text-grey-40 hover:bg-primary hover:text-white' }}">
                    {{ $category }}
                </a>
            @endforeach
        </div>

        {{-- Grid --}}
        @if($portfolios->isEmpty())
            <div class="rounded-lg bg-white p-10 text-center shadow">
                <p class="text-grey-40">Belum ada portfolio di kategori ini.</p>
            </div>
        @else
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($portfolios as $portfolio)
                    <a href="{{ route('portfolio.show', $portfolio) }}"
                       class="group flex flex-col overflow-hidden rounded-lg bg-white shadow transition-all hover:-translate-y-1 hover:shadow-xl">

                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('storage/' . $portfolio->image) }}"
                                 alt="{{ $portfolio->title }}"
                                 class="h-full w-full object-cover transition-transform group-hover:scale-110" />

                            <span class="absolute top-4 right-4 rounded-full bg-yellow px-3 py-1 font-body text-xs font-bold uppercase text-primary">
                                {{ $portfolio->category }}
                            </span>
                        </div>

                        <div class="flex flex-1 flex-col p-5">
                            <h3 class="font-header text-lg font-bold text-primary group-hover:text-yellow">
                                {{ $portfolio->title }}
                            </h3>

                            {{-- Meta --}}
                            <div class="mt-2 flex flex-wrap gap-3 font-body text-xs text-grey-40">
                                @if($portfolio->client_name)
                                    <span><i class="bx bx-user"></i> {{ $portfolio->client_name }}</span>
                                @endif
                                @if($portfolio->duration)
                                    <span><i class="bx bx-time"></i> {{ $portfolio->duration }}</span>
                                @endif
                                @if($portfolio->completed_at)
                                    <span><i class="bx bx-calendar"></i> {{ $portfolio->completed_at->format('M Y') }}</span>
                                @endif
                            </div>

                            <p class="mt-3 flex-1 font-body text-sm text-grey-20 line-clamp-3">
                                {{ $portfolio->description }}
                            </p>

                            {{-- Tech Stack --}}
                            @if($portfolio->tech_stack && count($portfolio->tech_stack) > 0)
                                <div class="mt-4 flex flex-wrap gap-1">
                                    @foreach(array_slice($portfolio->tech_stack, 0, 3) as $tech)
                                        <span class="rounded bg-grey-50 px-2 py-1 font-body text-xs text-grey-40">
                                            {{ $tech }}
                                        </span>
                                    @endforeach
                                    @if(count($portfolio->tech_stack) > 3)
                                        <span class="rounded bg-grey-50 px-2 py-1 font-body text-xs text-grey-40">
                                            +{{ count($portfolio->tech_stack) - 3 }}
                                        </span>
                                    @endif
                                </div>
                            @endif
                        </div>
                    </a>
                @endforeach
            </div>
        @endif

    </div>

@endsection