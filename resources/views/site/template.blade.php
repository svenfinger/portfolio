<!doctype html>
<html lang="en" class="bg-white text-black antialiased">
<head>
    <title>{{ (isset($title)) ? $title . " | " : "" }}Sven Finger</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (isset($description))
    <meta name="description" content="{{ $description }}">
    @endif
    @if (isset($noindex))
    <meta name="robots" content="noindex">
    @endif

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ (isset($title)) ? $title . " | " : "" }}Sven Finger">
    <meta property="og:description" content="{{ (isset($description)) ? $description : "" }}">
    <meta property="og:image" content="{{ (isset($item) && $item->hasImage('share')) ? $item->image('share', 'default') : asset('assets/img/share.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ (isset($title)) ? $title . " | " : "" }}Sven Finger">
    <meta property="twitter:description" content="{{ (isset($description)) ? $description : "" }}">
    <meta property="twitter:image" content="{{ (isset($item) && $item->hasImage('share')) ? $item->image('share', 'default') : asset('assets/img/share.png') }}">

    <link rel="stylesheet" href="https://use.typekit.net/lmy3oqr.css">

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="icon" href="{{ asset('favicon-96x96.png') }}" type="image/png" sizes="96x96" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="32x32">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" sizes="180x180">
</head>
<body>
    <div class="min-h-screen">

        {{-- Header --}}
        <nav x-data="{ open: false }" class="bg-white/70 backdrop-blur-2xl z-50 fixed top-0 left-0 right-0 py-px">
            <div @class([
                    'flex px-6 justify-between max-w-screen-2xl m-auto',
                ])>
                <a class="flex items-center gap-2 shrink-0 font-display font-semibold text-lg tracking-tight py-4 {{ Request::is('/') ? "opacity-100" : "opacity-90 hover:opacity-100" }}" href="/">
                    <img src="{{ asset('assets/img/logo.svg') }}" width="20" height="20" alt="Sven Finger">
                    <span>Sven Finger</span>
                </a>
                <div class="items-center hidden lg:flex">
                    <div class="flex grow gap-12">
                        <a href="/"
                           class="leading-none py-5.5 border-b-2 transition-all duration-200 {{ Request::is('/') ? "border-blue-600" : "border-transparent text-gray-500 hover:text-black hover:border-gray-300" }}">Intro</a>
                        <a href="{{ route('frontend.page', 'work') }}"
                           class="leading-none py-5.5 border-b-2 {{ Request::is('work', 'work/*') ? "border-blue-600" : "border-transparent text-gray-500 hover:text-black hover:border-gray-300" }}">Work</a>
                        <a href="{{ route('frontend.page', 'about') }}"
                           class="leading-none py-5.5 border-b-2 transition-all duration-200 {{ Request::is('about') ? "border-b-2 border-blue-600" : "border-transparent text-gray-500 hover:text-black hover:border-gray-300" }}">About</a>
                        <a href="{{ route('frontend.page', 'contact') }}"
                           class="leading-none py-5.5 border-b-2 transition-all duration-200 {{ Request::is('contact') ? "border-b-2 border-blue-600" : "border-transparent text-gray-500 hover:text-black hover:border-gray-300" }}">Contact</a>
                    </div>
                </div>
                <div class="py-4 px-6 -mr-6 sm:px-10 lg:hidden flex items-center cursor-pointer" x-on:click="open = ! open" x-cloak>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.625" stroke="currentColor" class="size-6" :class="open ? 'hidden' : ''">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 9h16.5m-16.5 6.75h16.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.625" stroke="currentColor" class="size-6" :class="open ? '' : 'hidden'">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div class="flex-col px-6 sm:px-10 pb-6 border-b border-white/10" x-cloak :class="open ? 'flex' : 'hidden'">
                <div class="flex flex-col items-start gap-6 text-xl">
                    <a href="/" class="py-3 {{ Request::is('/') ? "border-b-2 border-blue-600" : "text-gray-500 hover:text-black hover:border-b-2 border-gray-300" }}">Intro</a>
                    <a href="{{ route('frontend.page', 'about') }}" class="py-3 {{ Request::is('about') ? "border-b-2 border-blue-600" : "text-gray-500 hover:text-black hover:border-b-2 border-gray-300" }}">About</a>
                    <a href="{{ route('frontend.page', 'work') }}" class="py-3 {{ Request::is('work', 'work/*') ? "border-b-2 border-blue-600" : "text-gray-500 hover:text-black hover:border-b-2 border-gray-300" }}">Work</a>
                    <a href="{{ route('frontend.page', 'contact') }}" class="py-3 {{ Request::is('contact') ? "border-b-2 border-blue-600" : "text-gray-500 hover:text-black hover:border-b-2 border-gray-300" }}">Contact</a>
                </div>
            </div>
        </nav>

        {{-- Content --}}
        <div class="max-w-screen-2xl m-auto pt-16">
            @yield('content')
        </div>

        {{-- Page Navigation --}}
        @hasSection('page_navigation')
            <div class="{{ Request::is('work/*') ? "bg-gray-100" : "" }}">
                @yield('page_navigation')
            </div>
        @endif

        {{-- Footer --}}
        <div class="py-5 {{ Request::is('work/*') ? "bg-gray-100" : "" }}">
            <div class="max-w-screen-2xl m-auto grid sm:grid-cols-2 gap-6 px-6">
                <div class="flex gap-6 flex-col sm:flex-row">
                    <p class="text-gray-500">© {{ date('Y') }} Sven Finger</p>
                    <div class="flex gap-6">
                        <a href="/datenschutz" class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">Datenschutz</a>
                        <a href="/impressum" class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">Impressum</a>
                    </div>
                </div>
                <div class="flex gap-6 sm:justify-end">
                    <a href="https://www.linkedin.com/in/svenfinger/" target="_blank" class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">LinkedIn</a>
                    <a href="https://github.com/svenfinger" target="_blank" class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">GitHub</a>
                    <a href="https://www.instagram.com/svenfinger.digital/" target="_blank"  class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">Instagram</a>
                    <a href="https://www.threads.net/@svenfinger.digital" target="_blank"  class="text-gray-500 underline-offset-2 decoration-2 underline decoration-transparent hover:decoration-gray-300 hover:text-black transition duration-200">Threads</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
