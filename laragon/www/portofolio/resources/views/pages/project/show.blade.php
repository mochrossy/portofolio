@extends('layouts.public')

@section('title', $project->title)
@section('description', $project->description)

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
                {{ $project->title }}
            </h1>

            @if($project->tech_stack && count($project->tech_stack) > 0)
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach($project->tech_stack as $tech)
                        <span class="rounded-full bg-white bg-opacity-20 px-4 py-1 font-body text-sm font-semibold text-white">
                            {{ $tech }}
                        </span>
                    @endforeach
                </div>
            @endif
        </div>
    </div>

    {{-- Konten --}}
    <div class="container -mt-16 mb-16">
        <div class="mx-auto w-full rounded-lg bg-white p-6 shadow-lg sm:p-10 lg:w-11/12 xl:w-4/5">

            {{-- Gambar Utama --}}
            @if($project->image)
                <img src="{{ asset('storage/' . $project->image) }}"
                     alt="{{ $project->title }}"
                     class="mb-8 w-full rounded-lg shadow" />
            @endif

            {{-- Link --}}
            <div class="mb-8 flex flex-wrap gap-3 border-b border-grey-50 pb-6">
                @if($project->project_url)
                    <a href="{{ $project->project_url }}" target="_blank"
                       class="inline-flex items-center rounded bg-primary px-5 py-2 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
                        <i class="bx bx-link-external mr-2"></i>
                        Lihat Demo
                    </a>
                @endif
                @if($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank"
                       class="inline-flex items-center rounded bg-grey-50 px-5 py-2 font-header text-sm font-bold uppercase text-grey-40 hover:bg-grey-40 hover:text-white">
                        <i class="bx bxl-github mr-2 text-xl"></i>
                        Source Code
                    </a>
                @endif
            </div>

            {{-- Deskripsi --}}
            <div class="font-body leading-relaxed text-grey-20">
                {!! nl2br(e($project->description)) !!}
            </div>

        </div>
    </div>

    {{-- Project Lain --}}
    @if($otherProjects->count() > 0)
        <div class="bg-grey-50 py-16">
            <div class="container">
                <h2 class="mb-8 text-center font-header text-2xl font-bold uppercase text-primary sm:text-3xl">
                    Project Lainnya
                </h2>

                <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach($otherProjects as $other)
                        <a href="{{ route('project.show', $other) }}"
                           class="group overflow-hidden rounded-lg bg-white shadow transition-all hover:-translate-y-1 hover:shadow-xl">
                            <div class="h-48 overflow-hidden">
                                <img src="{{ asset('storage/' . $other->image) }}"
                                     alt="{{ $other->title }}"
                                     class="h-full w-full object-cover transition-transform group-hover:scale-110" />
                            </div>
                            <div class="p-5">
                                <h3 class="font-header text-base font-bold text-primary group-hover:text-yellow">
                                    {{ $other->title }}
                                </h3>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

@endsection