<!doctype html>
<html lang="en" class="bg-gray-800 text-white antialiased">
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

    @vite('resources/js/app.js')
    @vite('resources/css/app.css')

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" crossorigin="use-credentials">

    <script src="https://cdn.usefathom.com/script.js" data-site="WUIOMJDW" defer></script>
</head>
<body>
    <div class="bg-black max-w-screen-3xl min-h-screen m-auto">

        {{-- Header --}}
        <div x-data="{ open: false }">
            <div class="border-b border-white/10 flex justify-between lg:justify-normal">
                <a class="block px-6 sm:px-12 py-6 shrink-0 {{ Request::is('/') ? "opacity-100" : "opacity-90 hover:opacity-100" }}" href="/">
                    <img src="{{ asset('assets/img/logo.svg') }}" width="60" height="24" alt="Sven Finger Logo">
                </a>
                <div class="grow items-center hidden lg:flex">
                    <div class="flex grow">
                        <a href="/" class="py-6 px-4 {{ Request::is('/') ? "text-white" : "text-white/60 hover:text-white/80" }}">Intro</a>
                        <a href="{{ route('frontend.page', 'projects') }}" class="py-6 px-4 {{ Request::is('projects', 'projects/*') ? "text-white" : "text-white/60 hover:text-white/80" }}">Projects</a>
                        <a href="{{ route('frontend.page', 'about') }}" class="py-6 px-4 {{ Request::is('about') ? "text-white" : "text-white/60 hover:text-white/80" }}">About</a>
                        <a href="{{ route('frontend.page', 'contact') }}" class="py-6 px-4 {{ Request::is('contact') ? "text-white" : "text-white/60 hover:text-white/80" }}">Contact</a>
                    </div>
                    <div class="text-white/60" x-data="clock()" x-init="init()">
                        Hamburg <span x-text="getTime()">{{ date('H:i') }}</span>
                    </div>
                    <div class="px-12">
                        <x-button type="primary" href="{{ route('frontend.page', 'contact') }}">Let’s talk</x-button>
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
                    <a href="/" class="py-6 px-2 {{ Request::is('/') ? "text-white" : "text-white/60 hover:text-white/80" }}">Intro</a>
                    <a href="{{ route('frontend.page', 'about') }}" class="py-6 px-2 {{ Request::is('about') ? "text-white" : "text-white/60 hover:text-white/80" }}">About</a>
                    <a href="{{ route('frontend.page', 'projects') }}" class="py-6 px-2 {{ Request::is('projects', 'projects/*') ? "text-white" : "text-white/60 hover:text-white/80" }}">Projects</a>
                    <a href="{{ route('frontend.page', 'contact') }}" class="py-6 px-2 {{ Request::is('contact') ? "text-white" : "text-white/60 hover:text-white/80" }}">Contact</a>
                </div>
                <div class="flex px-2 gap-6 items-center">
                    <x-button type="primary" href="{{ route('frontend.page', 'contact') }}">Let’s talk</x-button>
                    <div class="text-white/60" x-data="clock()" x-init="init()">
                        Hamburg <span x-text="getTime()">{{ date('H:i') }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Content --}}
        @yield('content')

        {{-- Footer --}}
        <div class="px-6 sm:px-12 py-24 border-t border-white/10 flex flex-col gap-24 items-start">
            <div class="grid gap-12 sm:grid-cols-2 w-full">
                <div class="grid gap-12 grid-cols-2 md:grid-cols-3 text-lg">
                    <div class="flex flex-col items-start">
                        <a href="/" class="{{ Request::is('/') ? "text-white" : "text-white/60 hover:text-white/80" }}">Intro</a>
                        <a href="{{ route('frontend.page', 'projects') }}" class="{{ Request::is('projects', 'projects/*') ? "text-white" : "text-white/60 hover:text-white/80" }}">Projects</a>
                        <a href="{{ route('frontend.page', 'projects') }}" class="{{ Request::is('about') ? "text-white" : "text-white/60 hover:text-white/80" }}">About</a>
                        <a href="{{ route('frontend.page', 'contact') }}" class="{{ Request::is('contact') ? "text-white" : "text-white/60 hover:text-white/80" }}">Contact</a>
                        <a href="{{ route('frontend.page', 'privacy') }}" class="{{ Request::is('privacy') ? "text-white" : "text-white/60 hover:text-white/80" }}">Privacy</a>
                        <a href="{{ route('frontend.page', 'imprint') }}" class="{{ Request::is('imprint') ? "text-white" : "text-white/60 hover:text-white/80" }}">Imprint</a>
                    </div>
                    <div class="flex flex-col items-start">
                        <a href="https://www.linkedin.com/in/svenfinger/" target="_blank" class="text-white/60 hover:text-white/80">LinkedIn</a>
                        <a href="https://dribbble.com/svenfinger" target="_blank" class="text-white/60 hover:text-white/80">Dribbble</a>
                        <a href="https://github.com/svenfinger" target="_blank" class="text-white/60 hover:text-white/80">GitHub</a>
                        <a href="https://www.instagram.com/svenfinger.digital/" target="_blank" class="text-white/60 hover:text-white/80">Instagram</a>
                        <a href="https://x.com/svenfinger" target="_blank" class="text-white/60 hover:text-white/80 min-w-[48px]">X</a>
                    </div>
                </div>
                <div>
                    <x-prose size="small">
                        <p>Let’s talk! Email me at <a href="mailto:hi@svenfinger.digital">hi@svenfinger.digital</a> or send me a <a href="https://x.com/svenfinger" target="_blank">direct message on X</a>.</p>

                        <p><a href="https://github.com/svenfinger" target="_blank">View source code on GitHub</a></p>

                        <p>© 2023-{{ date('Y') }} Sven Finger. All rights reserved.</p>
                    </x-prose>
                </div>
            </div>
            <a href="/" class="opacity-90 hover:opacity-100">
                <img src="{{ asset('assets/img/logo.svg') }}" width="60" height="24" alt="Sven Finger Logo">
            </a>
        </div>
    </div>
</body>
</html>
