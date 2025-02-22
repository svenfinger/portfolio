@props(['type', 'size' => 'medium'])

@php
    $type = [
        'primary' => 'bg-gradient-to-b from-blue-600 to-blue-800 hover:from-blue-500 hover:to-blue-700 shadow-outline shadow-white/10',
        'secondary' => 'bg-gradient-to-b from-gray-700 to-gray-900 hover:from-gray-600 hover:to-gray-800 shadow-outline shadow-white/5',
    ][$type];

    $size = [
        'medium' => 'py-2 px-6',
        'large' => 'py-3 px-8 text-lg',
    ][$size];
@endphp

<a {{ $attributes->merge(['class' => "inline-flex items-center justify-center text-center rounded focus:outline-1 outline-offset-2 outline-blue-500 $type $size"]) }}>
    {{ $slot }}
</a>
