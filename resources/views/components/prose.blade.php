@props(['size' => 'medium'])

@php
    $size = [
        'small' => 'prose-base',
        'medium' => 'prose-xl',
        'large' => 'prose-2xl',
    ][$size];
@endphp

<div {{ $attributes->merge(['class' => "prose $size prose-p:leading-normal prose-a:decoration-black/50 prose-a:hover:decoration-black prose-a:decoration-1 prose-a:underline-offset-2 prose-a:font-normal prose-strong:font-semibold"]) }}>{{ $slot }}</div>
