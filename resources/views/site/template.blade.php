<!doctype html>
<html lang="en">
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

    @vite('resources/css/app.css')

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <link rel="icon" href="{{ asset('icon.svg') }}" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="manifest" href="{{ asset('manifest.webmanifest') }}" crossorigin="use-credentials">
</head>
<body class="bg-black text-white antialiased">
    <div class="m-6 sm:m-12 pt-6 sm:pt-12 grid grid-cols-2 items-start border-t-2 border-white/30 border-dotted gap-6 sm:gap-12">
        <div>
            <a class="inline-block" href="/">
                <svg width="80" height="32" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 960 384"><path d="M0 0h456v72a24 24 0 0 1-24 24H120a24 24 0 1 0 0 48h312a24 24 0 0 1 24 24v216H0v-96h336a24 24 0 1 0 0-48H0V0ZM960 0H504v72a24 24 0 0 0 24 24h432V0ZM960 144H528a24 24 0 0 0-24 24v216h96V264a24 24 0 0 1 24-24h336v-96ZM932.8 324l-8.3 4.8a14.4 14.4 0 1 0 0 14.4l8.3 4.8a24 24 0 1 1 0-24Z" fill="#fff"/><path fill-rule="evenodd" clip-rule="evenodd" d="M960 336a48 48 0 1 1-96 0 48 48 0 0 1 96 0Zm-12 0a36 36 0 1 1-72 0 36 36 0 0 1 72 0Z" fill="#fff"/></svg>
            </a>
        </div>
        <div class="flex gap-3 sm:gap-12 pt-1">
            <a href="{{ route('frontend.page', 'projects') }}" class="font-medium hover:underline decoration-from-font">Projects</a>
            <a href="{{ route('frontend.page', 'contact') }}" class="font-medium hover:underline decoration-from-font">Contact</a>
        </div>
    </div>
    @yield('content')
    <div class="m-6 sm:m-12 pt-6 sm:pt-12 flex flex-col gap-6 sm:gap-12 border-t-2 border-white/30 border-dotted">
        <div class="grid gap-6 sm:gap-12 grid-cols-2">
            <div>© {{ date('Y') }} Sven&nbsp;Finger</div>
            <div class="flex gap-3 sm:gap-12">
                <a href="{{ route('frontend.page', 'privacy') }}" class="font-medium hover:underline decoration-from-font">Privacy</a>
                <a href="{{ route('frontend.page', 'imprint') }}" class="font-medium hover:underline decoration-from-font">Imprint</a>
            </div>
        </div>
    </div>
</body>
</html>
