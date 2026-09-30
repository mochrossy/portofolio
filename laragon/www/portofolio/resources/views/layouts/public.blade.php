<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.meta')

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet" />

    {{-- Boxicons --}}
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />

    {{-- Styles --}}
    <link href="{{ asset('assets/styles/main.min.css') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="relative bg-grey-50">

    <div id="main" class="relative">

        {{-- Navbar --}}
        <div class="w-full z-50 top-0 py-3 sm:py-5 bg-primary">
            <div class="container flex items-center justify-between">
                <div>
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.svg') }}" class="w-24 lg:w-48" alt="logo" />
                    </a>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex items-center">
                        <li class="group pl-6">
                            <a href="{{ url('/') }}"
                               class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white hover:text-yellow">
                                Home
                            </a>
                        </li>
                        <li class="group pl-6">
                            <a href="{{ route('portfolio.index') }}"
                               class="cursor-pointer pt-0.5 font-header font-semibold uppercase {{ request()->routeIs('portfolio.*') || request()->routeIs('project.*') ? 'text-yellow' : 'text-white hover:text-yellow' }}">
                                Portfolio
                            </a>
                        </li>
                        <li class="group pl-6">
                            <a href="{{ route('blog.index') }}"
                               class="cursor-pointer pt-0.5 font-header font-semibold uppercase {{ request()->routeIs('blog.*') ? 'text-yellow' : 'text-white hover:text-yellow' }}">
                                Blog
                            </a>
                        </li>
                        <li class="group pl-6">
                            <a href="{{ url('/#contact') }}"
                               class="cursor-pointer pt-0.5 font-header font-semibold uppercase text-white hover:text-yellow">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="block lg:hidden">
                    <a href="{{ url('/') }}">
                        <i class="bx bx-home text-3xl text-white"></i>
                    </a>
                </div>
            </div>
        </div>

        {{-- Konten --}}
        @yield('content')

        {{-- Footer --}}
        @include('partials.footer')
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    @stack('scripts')
</body>
</html>