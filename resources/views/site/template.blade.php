<!doctype html>
<html lang="en">
<head>
    <title>Sven Finger</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Manrope:wght@600&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white antialiased">
    <div class="mx-12 my-8 grid grid-cols-2 items-start">
        <div>
            <a class="text-2xl leading-tight inline-block hover:underline decoration-from-font" href="/">
                Sven<br> Finger
            </a>
        </div>
        <div class="flex gap-12 pt-1">
            <a href="{{ route('frontend.page', 'projects') }}" class="hover:underline decoration-from-font">Projects</a>
            <a href="{{ route('frontend.page', 'contact') }}" class="hover:underline decoration-from-font">Contact</a>
        </div>
    </div>
    @yield('content')
    <div class="p-12 flex flex-col gap-12">
        <hr class="border-white/30">
        <div class="grid grid-cols-2">
            <div>© {{ date('Y') }} Sven Finger</div>
            <div class="flex gap-12 pt-1">
                <a href="{{ route('frontend.page', 'privacy') }}" class="hover:underline decoration-from-font">Privacy</a>
                <a href="{{ route('frontend.page', 'imprint') }}" class="hover:underline decoration-from-font">Imprint</a>
            </div>
        </div>
    </div>
</body>
</html>
