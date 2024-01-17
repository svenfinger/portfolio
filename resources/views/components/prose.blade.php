@props(['size' => 'medium'])

@php
    $size = [
        'small' => 'prose-lg',
        'medium' => 'prose-xl',
        'large' => 'prose-2xl',
    ][$size];
@endphp

<div {{ $attributes->merge(['class' => "prose prose-invert $size prose-p:leading-normal prose-a:decoration-white/50 hover:prose-a:decoration-white prose-a:decoration-1 prose-a:underline-offset-2 prose-a:font-normal prose-strong:font-semibold"]) }}>{{ $slot }}</div>
