<!doctype html>
<html lang="en" class="bg-black text-white antialiased">
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
    <meta property="og:image" content="{{ (isset($item) && $item->hasImage('cover')) ? $item->image('cover', 'default') : asset('assets/img/share.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ (isset($title)) ? $title . " | " : "" }}Sven Finger">
    <meta property="twitter:description" content="{{ (isset($description)) ? $description : "" }}">
    <meta property="twitter:image" content="{{ (isset($item) && $item->hasImage('cover')) ? $item->image('cover', 'default') : asset('assets/img/share.png') }}">

    <script src="https://cdn.usefathom.com/script.js" data-site="APTCWGJK" defer></script>

    @vite('resources/css/app.css')

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" crossorigin="use-credentials">
</head>
<body>
    <div class="m-6 sm:m-12 pt-6 sm:pt-12 grid grid-cols-2 items-start border-t-2 border-white/30 border-dotted gap-6 sm:gap-12">
        <div>
            <a class="inline-block" href="/">
                <img src="{{ asset('assets/img/logo.svg') }}" width="80" height="32" alt="Sven Finger Logo">
            </a>
        </div>
        <div class="flex gap-3 sm:gap-12 pt-1">
            <a href="{{ route('frontend.page', 'projects') }}" class="font-medium decoration-1 underline-offset-2 {{ Request::is('projects') || Request::is('projects/*') ? "underline decoration-white" : "hover:underline hover:decoration-white/50" }}">Projects</a>
            <a href="{{ route('frontend.page', 'contact') }}" class="font-medium decoration-1 underline-offset-2 {{ Request::is('contact') ? "underline decoration-white" : "hover:underline hover:decoration-white/50" }}">Contact</a>
        </div>
    </div>
    @yield('content')
    <div class="m-6 sm:m-12 pt-6 sm:pt-12 flex flex-col gap-6 sm:gap-12 border-t-2 border-white/30 border-dotted">
        <div class="grid gap-6 sm:gap-12 grid-cols-2">
            <div>© {{ date('Y') }} Sven&nbsp;Finger</div>
            <div class="flex gap-3 sm:gap-12">
                <a href="{{ route('frontend.page', 'privacy') }}" class="font-medium decoration-1 underline-offset-2 {{ Request::is('privacy') ? "underline decoration-white" : "hover:underline hover:decoration-white/50" }}">Privacy</a>
                <a href="{{ route('frontend.page', 'imprint') }}" class="font-medium decoration-1 underline-offset-2 {{ Request::is('imprint') ? "underline decoration-white" : "hover:underline hover:decoration-white/50" }}">Imprint</a>
            </div>
        </div>
    </div>
</body>
</html>
