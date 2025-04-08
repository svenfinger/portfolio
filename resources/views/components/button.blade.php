@props(['type', 'size' => 'medium'])

@php
    $type = [
        'primary' => 'bg-blue-600 hover:bg-blue-700 active:bg-blue-800',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 active:bg-gray-800',
    ][$type];

    $size = [
        'medium' => 'pt-3 pb-2.5 px-6',
        'large' => 'px-8 text-lg',
    ][$size];
@endphp

<a {{ $attributes->merge(['class' => "font-display font-medium text-white shadow-button active:shadow-sm rounded-full duration-200 ease-in-out $type $size"]) }}>
    {{ $slot }}
</a>
