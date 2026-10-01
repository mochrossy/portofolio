@extends('layouts.public')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <div class="container py-32 text-center">
        <h1 class="font-header text-9xl font-bold text-primary">404</h1>
        <h2 class="mt-4 font-header text-2xl font-semibold uppercase text-grey-40">
            Halaman Tidak Ditemukan
        </h2>
        <p class="mt-4 font-body text-grey-20">
            Maaf, halaman yang Anda cari tidak tersedia.
        </p>
        <a href="{{ url('/') }}"
           class="mt-8 inline-block rounded bg-primary px-8 py-3 font-header text-sm font-bold uppercase text-white hover:bg-grey-20">
            Kembali ke Homepage
        </a>
    </div>
@endsection