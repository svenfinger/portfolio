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
    <div class="p-6 sm:p-12 grid grid-cols-2 items-start">
        <div>
            <a class="text-2xl leading-tight inline-block hover:underline decoration-from-font" href="/">
                Sven<br> Finger
            </a>
        </div>
        <div class="flex gap-3 sm:gap-12 pt-1">
            <a href="{{ route('frontend.page', 'projects') }}" class="hover:underline decoration-from-font">Projects</a>
            <a href="{{ route('frontend.page', 'contact') }}" class="hover:underline decoration-from-font">Contact</a>
        </div>
    </div>
    @yield('content')
    <div class="p-6 sm:p-12 flex flex-col gap-6 sm:gap-12">
        <hr class="border-white/30">
        <div class="grid gap-3 sm:gap-0 grid-cols-2">
            <div>© {{ date('Y') }} Sven&nbsp;Finger</div>
            <div class="flex gap-3 sm:gap-12">
                <a href="{{ route('frontend.page', 'privacy') }}" class="hover:underline decoration-from-font">Privacy</a>
                <a href="{{ route('frontend.page', 'imprint') }}" class="hover:underline decoration-from-font">Imprint</a>
            </div>
        </div>
    </div>
</body>
</html>
