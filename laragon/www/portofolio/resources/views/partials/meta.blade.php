@php
    $metaTitle = trim($__env->yieldContent('title', config('app.name'))) . ' | ' . config('app.name');
    $metaDescription = trim($__env->yieldContent('description', 'Portofolio dan blog pribadi Moch. Rossy Avian I. — System Administrator & Fullstack Developer.'));
    $metaImage = trim($__env->yieldContent('og_image', asset('assets/img/social.jpg')));
    $metaUrl = url()->current();
    $metaType = trim($__env->yieldContent('og_type', 'website'));
@endphp

{{-- Basic Meta --}}
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="theme-color" content="#5540af" />

<title>{{ $metaTitle }}</title>
<meta name="description" content="{{ $metaDescription }}" />
<link rel="canonical" href="{{ $metaUrl }}" />

{{-- Open Graph (Facebook, LinkedIn, WhatsApp) --}}
<meta property="og:type" content="{{ $metaType }}" />
<meta property="og:title" content="{{ $metaTitle }}" />
<meta property="og:description" content="{{ $metaDescription }}" />
<meta property="og:url" content="{{ $metaUrl }}" />
<meta property="og:image" content="{{ $metaImage }}" />
<meta property="og:site_name" content="{{ config('app.name') }}" />
<meta property="og:locale" content="id_ID" />

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{ $metaTitle }}" />
<meta name="twitter:description" content="{{ $metaDescription }}" />
<meta name="twitter:image" content="{{ $metaImage }}" />

{{-- Favicon --}}
<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />