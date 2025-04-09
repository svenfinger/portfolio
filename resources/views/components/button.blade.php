@props(['type', 'size' => 'medium'])

@php
    $type = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 active:bg-blue-800',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 active:bg-gray-800',
    ][$type];

    $size = [
        'medium' => 'pt-3.5 pb-2.5 px-6',
        'large' => 'px-8 text-lg',
    ][$size];
@endphp

<a {{ $attributes->merge(['class' => "inline-block font-display font-semibold text-white shadow-button active:shadow-sm rounded-lg transition duration-200 $type $size"]) }}>
    {{ $slot }}
</a>
