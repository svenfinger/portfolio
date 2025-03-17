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

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
</head>
<body>
    <div class="min-h-screen m-auto" x-data="{ atTop: true }"> {{-- max-w-screen-3xl --}}

        {{-- Header --}}
        <nav x-data="{ open: false, lastScroll: window.scrollY, visible: false }" class="z-50 fixed top-0 left-0 right-0 transition duration-200 ease-in-out border-b border-transparent -translate-y-full"
             :class="{ 'bg-white border-b-gray-200': !atTop, ' border-transparent': atTop, 'translate-y-0': visible, '-translate-y-full': !visible }"
             x-init="
                visible = window.scrollY < 50; // Ensure it's visible on load
                lastScroll = window.scrollY;
                window.addEventListener('scroll', () => {
                    let currentScroll = window.scrollY;
                    visible = currentScroll < lastScroll || currentScroll < 50;
                    lastScroll = currentScroll;
                    atTop = currentScroll < 64 ? true : false;
                });
            ">
            <div @class([
                    'flex px-6 py-4 justify-between',
                    'text-white' => isset($is_work),
                ])>
                <a class="flex items-center gap-2 shrink-0 font-display font-semibold text-lg tracking-tight {{ Request::is('/') ? "opacity-100" : "opacity-90 hover:opacity-100" }}" href="/">
                    <img src="{{ asset('assets/img/logo.svg') }}" width="20" height="20" alt="Sven Finger">
                    <span>Sven Finger</span>
                </a>
                <div class="items-center hidden lg:flex">
                    <div class="flex grow gap-6">
                        <a href="/" class="rounded leading-none pt-2 pb-2.5 px-3 {{ Request::is('/') ? "bg-black/5" : "text-black/60 hover:text-black/80" }}">Intro</a>
                        <a href="{{ route('frontend.page', 'work') }}" class="rounded leading-none pt-2 pb-2.5 px-3 {{ Request::is('work', 'work/*') ? "bg-black/5" : "text-black/60 hover:text-black/80" }}">Work</a>
                        <a href="{{ route('frontend.page', 'about') }}" class="rounded leading-none pt-2 pb-2.5 px-3 {{ Request::is('about') ? "bg-black/5" : "text-black/60 hover:text-black/80" }}">About</a>
                        <a href="{{ route('frontend.page', 'contact') }}" class="rounded leading-none pt-2 pb-2.5 px-3 {{ Request::is('contact') ? "bg-black/5" : "text-black/60 hover:text-black/80" }}">Contact</a>
                    </div>
                </div>
                <div class="py-5 px-4 sm:px-10 lg:hidden flex items-center cursor-pointer" x-on:click="open = ! open">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                    </svg>
                </div>
            </div>

            {{-- Mobile Navigation --}}
            <div class="flex-col px-4 sm:px-10 pb-6 border-b border-white/10" x-cloak :class="open ? 'flex' : 'hidden'">
                <div class="flex">
                    <a href="/" class="py-6 px-2 {{ Request::is('/') ? "text-black" : "text-black/60 hover:text-black/80" }}">Intro</a>
                    <a href="{{ route('frontend.page', 'about') }}" class="py-6 px-2 {{ Request::is('about') ? "text-black" : "text-black/60 hover:text-black/80" }}">About</a>
                    <a href="{{ route('frontend.page', 'projects') }}" class="py-6 px-2 {{ Request::is('projects', 'projects/*') ? "text-black" : "text-black/60 hover:text-black/80" }}">Projects</a>
                    <a href="{{ route('frontend.page', 'contact') }}" class="py-6 px-2 {{ Request::is('contact') ? "text-black" : "text-black/60 hover:text-black/80" }}">Contact</a>
                </div>
                <div class="flex px-2 gap-6 items-center">
                    <x-button type="primary" href="{{ route('frontend.page', 'contact') }}">Let’s talk</x-button>
                    <div class="text-black/60" x-data="clock()" x-init="init()">
                        Hamburg <span x-text="getTime()">{{ date('H:i') }}</span>
                    </div>
                </div>
            </div>
        </nav>

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        <div class="px-6 py-5 border-t border-gray-200 grid grid-cols-12 gap-6">
            <div class="col-span-5">
                <x-prose size="small">
                    <p>© 2023-{{ date('Y') }} Sven Finger. All rights reserved.<br>
                        <a href="https://github.com/svenfinger" target="_blank" class="text-gray-500">View source code on GitHub</a></p>
                </x-prose>
            </div>
            <div class="flex gap-6 col-span-4">
                <a href="https://www.linkedin.com/in/svenfinger/" target="_blank" class="text-black/60 hover:text-black/80">LinkedIn</a>
                <a href="https://dribbble.com/svenfinger" target="_blank" class="text-black/60 hover:text-black/80">Dribbble</a>
                <a href="https://github.com/svenfinger" target="_blank" class="text-black/60 hover:text-black/80">GitHub</a>
                <a href="https://www.instagram.com/svenfinger.digital/" target="_blank" class="text-black/60 hover:text-black/80">Instagram</a>
            </div>
            <div class="flex gap-6 col-span-3 justify-end">
                <a href="{{ route('frontend.page', 'privacy') }}" class="{{ Request::is('privacy') ? "text-black" : "text-black/60 hover:text-black/80" }}">Privacy</a>
                <a href="{{ route('frontend.page', 'imprint') }}" class="{{ Request::is('imprint') ? "text-black" : "text-black/60 hover:text-black/80" }}">Imprint</a>
            </div>
        </div>
    </div>
</body>
</html>
