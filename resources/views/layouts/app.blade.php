<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'DECAD - Professional CAD Design & Engineering Services')</title>
    <meta name="description" content="Expert electrical and mechanical engineering design solutions across multiple industries. From concept to completion, we deliver precision and excellence.">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-white">
    {{-- Header --}}
    <header class="fixed top-0 left-0 right-0 bg-white shadow-md z-50" id="site-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex-shrink-0">
                    <a href="#home" class="block" data-scroll="home">
                        <img src="{{ asset('images/logo.png') }}" alt="DECAD" class="h-10 w-auto">
                    </a>
                </div>
                <nav class="hidden md:flex items-center space-x-8">
                    <button type="button" data-scroll="home" class="nav-link text-sm font-medium transition-colors hover:text-red-600 text-gray-700">Home</button>
                    <button type="button" data-scroll="about" class="nav-link text-sm font-medium transition-colors hover:text-red-600 text-gray-700">About</button>
                    <button type="button" data-scroll="services" class="nav-link text-sm font-medium transition-colors hover:text-red-600 text-gray-700">Services</button>
                    <button type="button" data-scroll="industries" class="nav-link text-sm font-medium transition-colors hover:text-red-600 text-gray-700">Industries</button>
                    <button type="button" data-scroll="contact" class="bg-red-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-red-700 transition-colors">Contact Us</button>
                </nav>
                <button type="button" id="mobile-menu-btn" class="md:hidden text-gray-700 hover:text-red-600 transition-colors p-2" aria-label="Toggle menu">
                    <svg id="menu-icon-open" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="menu-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200">
            <nav class="px-4 py-4 space-y-3">
                <button type="button" data-scroll="home" class="mobile-nav-link block w-full text-left px-4 py-2 rounded-lg font-medium transition-colors text-gray-700 hover:bg-gray-50">Home</button>
                <button type="button" data-scroll="about" class="mobile-nav-link block w-full text-left px-4 py-2 rounded-lg font-medium transition-colors text-gray-700 hover:bg-gray-50">About</button>
                <button type="button" data-scroll="services" class="mobile-nav-link block w-full text-left px-4 py-2 rounded-lg font-medium transition-colors text-gray-700 hover:bg-gray-50">Services</button>
                <button type="button" data-scroll="industries" class="mobile-nav-link block w-full text-left px-4 py-2 rounded-lg font-medium transition-colors text-gray-700 hover:bg-gray-50">Industries</button>
                <button type="button" data-scroll="contact" class="block w-full text-left bg-red-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-red-700 transition-colors">Contact Us</button>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
