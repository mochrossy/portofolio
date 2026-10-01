@extends('layouts.blog')

@section('title', 'Blog')
@section('page-title', 'Blog')
@section('page-subtitle', 'Tulisan seputar Laravel, Linux, dan system administration')

@section('content')

{{-- Search --}}
<form action="{{ route('blog.index') }}" method="GET" class="mb-8">
    <div class="flex gap-2">
        <input
            type="text"
            name="q"
            value="{{ $search ?? '' }}"
            placeholder="Cari artikel..."
            class="w-full rounded border-grey-50 px-4 py-3 font-body text-black focus:border-primary focus:outline-none"
        />
        <button type="submit"
                class="rounded bg-primary px-6 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
            <i class="bx bx-search"></i>
        </button>
    </div>
    @if($search ?? false)
        <p class="mt-2 font-body text-sm text-grey-40">
            Hasil pencarian untuk: <strong>{{ $search }}</strong>
            · <a href="{{ route('blog.index') }}" class="text-primary hover:text-yellow">Reset</a>
        </p>
    @endif
</form>
    {{-- Daftar post — sementara hardcoded --}}
    @php
        $posts = [
            [
                'slug' => 'belajar-laravel-dari-nol',
                'title' => 'Belajar Laravel dari Nol untuk Fullstack Developer',
                'excerpt' => 'Panduan memulai Laravel sebagai backend sekaligus belajar frontend modern dengan Blade dan Tailwind.',
                'image' => 'assets/img/post-01.png',
                'date' => '12 Januari 2025',
                'author' => 'Moch. Rossy Avian I.',
                'category' => 'Laravel',
            ],
            [
                'slug' => 'implementasi-zimbra-mail-server',
                'title' => 'Implementasi Zimbra Mail Server di Lingkungan Pemerintahan',
                'excerpt' => 'Catatan lengkap dari konfigurasi DNS, BIND9, hingga instalasi Zimbra Collaboration Suite.',
                'image' => 'assets/img/zimbrapemkab01.png',
                'date' => '19 September 2011',
                'author' => 'Moch. Rossy Avian I.',
                'category' => 'Linux',
            ],
            [
                'slug' => 'tips-dokumentasi-teknis',
                'title' => 'Tips Menulis Dokumentasi Teknis yang Berguna',
                'excerpt' => 'Dokumentasi bukan hanya formalitas. Ini cara membuatnya bermanfaat untuk tim dan diri sendiri.',
                'image' => 'assets/img/post-03.png',
                'date' => '20 Maret 2026',
                'author' => 'Moch. Rossy Avian I.',
                'category' => 'Writing',
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach($posts as $post)
            <a href="{{ route('blog.show', $post['slug']) }}"
               class="group flex flex-col overflow-hidden rounded-lg shadow transition-all hover:-translate-y-1 hover:shadow-xl">

                <div class="h-48 bg-cover bg-center bg-no-repeat transition-transform group-hover:scale-105"
                     style="background-image: url('{{ asset($post['image']) }}')">
                </div>

                <div class="flex flex-1 flex-col bg-white p-5">
                    <span class="font-body text-xs font-bold uppercase text-yellow">
                        {{ $post['category'] }}
                    </span>
                    <h3 class="pt-2 font-header text-lg font-bold text-primary group-hover:text-yellow md:text-xl">
                        {{ $post['title'] }}
                    </h3>
                    <p class="flex-1 pt-3 font-body text-sm text-grey-20">
                        {{ $post['excerpt'] }}
                    </p>
                    <div class="flex items-center justify-between pt-4 text-xs text-grey-40">
                        <span>{{ $post['date'] }}</span>
                        <span class="font-semibold text-primary">Baca →</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

@endsection