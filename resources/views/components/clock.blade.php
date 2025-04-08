@props(['type'])

@php
    $type = [
        'urgent' => 'bg-red-600',
        'secondary' => 'bg-blue-600',
    ][$type];
@endphp

<span {{ $attributes->merge(['class' => "inline-block rounded-full text-xs leading-normal uppercase tracking-wide px-2 $type"]) }}>
    <div class="text-black/60" x-data="clock()" x-init="init()">
        Hamburg <span x-text="getTime()">{{ date('H:i') }}</span>
    </div>
</span>
