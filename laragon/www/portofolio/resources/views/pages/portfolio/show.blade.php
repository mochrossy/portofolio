@extends('layouts.public')

@section('title', $portfolio->title)
@section('description', $portfolio->description)

@section('content')

    {{-- Header --}}
    <div class="bg-primary pt-6 pb-24 sm:pt-8 sm:pb-32">
        <div class="container">
            <a href="{{ route('portfolio.index') }}"
               class="inline-flex items-center font-header text-sm font-bold uppercase text-grey-50 hover:text-yellow">
                <i class="bx bx-left-arrow-alt mr-1 text-xl"></i>
                Kembali ke Portfolio
            </a>
            <h1 class="mt-4 font-header text-3xl font-semibold uppercase text-white sm:text-4xl lg:text-5xl">
                {{ $portfolio->title }}
            </h1>

            <div class="mt-4 flex flex-wrap gap-4 font-body text-sm text-grey-50">
                @if($portfolio->client_name)
                    <span><i class="bx bx-user"></i> {{ $portfolio->client_name }}</span>
                @endif
                @if($portfolio->duration)
                    <span><i class="bx bx-time"></i> {{ $portfolio->duration }}</span>
                @endif
                @if($portfolio->completed_at)
                    <span><i class="bx bx-calendar"></i> {{ $portfolio->completed_at->format('d M Y') }}</span>
                @endif
                <span class="rounded-full bg-yellow px-3 py-1 font-bold uppercase text-primary">
                    {{ $portfolio->category }}
                </span>
            </div>
        </div>
    </div>

    {{-- Konten --}}
    <div class="container -mt-16 mb-16">
        <div class="mx-auto w-full rounded-lg bg-white p-6 shadow-lg sm:p-10 lg:w-11/12 xl:w-4/5">

            {{-- Gambar Utama --}}
            @if($portfolio->image)
                <img src="{{ asset('storage/' . $portfolio->image) }}"
                     alt="{{ $portfolio->title }}"
                     class="mb-8 w-full rounded-lg shadow" />
            @endif

            {{-- Info Grid --}}
            <div class="mb-8 grid grid-cols-1 gap-4 border-b border-grey-50 pb-6 sm:grid-cols-3">

                @if($portfolio->client_name)
                    <div>
                        <p class="font-header text-xs font-bold uppercase text-grey-40">Klien</p>
                        <p class="mt-1 font-body text-base text-primary">{{ $portfolio->client_name }}</p>
                    </div>
                @endif

                @if($portfolio->duration)
                    <div>
                        <p class="font-header text-xs font-bold uppercase text-grey-40">Durasi</p>
                        <p class="mt-1 font-body text-base text-primary">{{ $portfolio->duration }}</p>
                    </div>
                @endif

                @if($portfolio->completed_at)
                    <div>
                        <p class="font-header text-xs font-bold uppercase text-grey-40">Selesai</p>
                        <p class="mt-1 font-body text-base text-primary">
                            {{ $portfolio->completed_at->format('d F Y') }}
                        </p>
                    </div>
                @endif

            </div>

            {{-- Deskripsi --}}
            <div class="mb-8">
                <h2 class="mb-3 font-header text-xl font-bold uppercase text-primary">
                    Deskripsi Project
                </h2>
                <div class="font-body leading-relaxed text-grey-20">
                    {!! nl2br(e($portfolio->description)) !!}
                </div>
            </div>

            {{-- Hasil --}}
            @if($portfolio->result)
                <div class="mb-8 rounded-lg border-l-4 border-yellow bg-grey-50 p-6">
                    <h2 class="mb-3 font-header text-xl font-bold uppercase text-primary">
                        Hasil & Dampak
                    </h2>
                    <div class="font-body leading-relaxed text-grey-20">
                        {!! nl2br(e($portfolio->result)) !!}
                    </div>
                </div>
            @endif

            {{-- Tech Stack --}}
            @if($portfolio->tech_stack && count($portfolio->tech_stack) > 0)
                <div class="mb-8">
                    <h2 class="mb-3 font-header text-xl font-bold uppercase text-primary">
                        Tech Stack
                    </h2>
                    <div class="flex flex-wrap gap-2">
                        @foreach($portfolio->tech_stack as $tech)
                            <span class="rounded-full bg-grey-50 px-4 py-2 font-body text-sm font-semibold text-grey-20">
                                {{ $tech }}
                            </span>
                        @endforeach
                    </div>
                </div>
            @endif

        </div>
    </div>

    {{-- Portfolio Terkait --}}
    @if($related->count() > 0)
        <div class="bg-grey-50 py-16">
            <div class="container">
                <h2 class="mb-8 text-center font-header text-2xl font-bold uppercase text-primary sm:text-3xl">
                    Portfolio Terkait
                </h2>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($related as $item)
                        <a href="{{ route('portfolio.show', $item) }}"
                           class="group overflow-hidden rounded-lg bg-white shadow transition-all hover:-translate-y-1 hover:shadow-xl">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->image) }}"
                                     alt="{{ $item->title }}"
                                     class="h-full w-full object-cover transition-transform group-hover:scale-110" />
                            </div>
                            <div class="p-5">
                                <h3 class="font-header text-base font-bold text-primary group-hover:text-yellow">
                                    {{ $item->title }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection