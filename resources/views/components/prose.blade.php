@props(['size' => 'medium', 'class' => ''])

@php
    $size = [
        'small' => 'prose-base',
        'medium' => 'prose-xl',
        'large' => 'prose-xl sm:prose-2xl',
    ][$size];
@endphp

<div @class([
        'prose',
        $size,
        $class,
        'prose-headings:font-display',
        'prose-headings:font-semibold',
        'prose-p:leading-normal',
        'prose-a:transition-all prose-a:duration-200',
        'prose-a:underline-offset-2',
        'prose-a:decoration-2',
        'prose-a:decoration-gray-300',
        'prose-a:hover:decoration-blue-600',
    ])>
    {{ $slot }}
</div>
