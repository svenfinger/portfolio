<!doctype html>
<html lang="en">
<head>
    <title>{{ $item->title }}</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Manrope:wght@600&display=swap" rel="stylesheet">
</head>
<body class="bg-black text-white">
    <div class="mx-12 my-8 grid grid-cols-2">
        <a class="text-2xl leading-tight" href="/">
            Sven<br> Finger
        </a>
        <div class="flex gap-12 pt-1">
            <a href="/work">Work <sup>8</sup></a>
            <a href="/contact">Contact</a>
        </div>
    </div>
    {!! $item->renderBlocks() !!}
    <div class="p-12 flex flex-col gap-12">
        <hr class="border-white/30">
        <div class="grid grid-cols-2">
            <div>© {{ date("Y") }} Sven Finger</div>
            <div class="flex gap-12 pt-1">
                <a href="/work">Work <sup>8</sup></a>
                <a href="/contact">Contact</a>
            </div>
        </div>
    </div>
</body>
</html>
