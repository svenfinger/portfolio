@props(['type'])

@php
    $type = [
        'critical' => 'bg-red-600',
        'secondary' => 'bg-blue-600',
    ][$type];
@endphp

<span {{ $attributes->merge(['class' => "inline-block rounded-full text-xs leading-normal uppercase tracking-wide px-2 $type"]) }}>
    <span class="relative top-0.5">{{ $slot }}</span>
</span>
