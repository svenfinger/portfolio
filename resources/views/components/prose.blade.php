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
        'prose-headings:leading-tight',
        'prose-headings:md:leading-tight',
        'prose-headings:tracking-tight',
        'prose-h1:text-5xl',
        'prose-h1:md:text-6xl',
        'prose-h2:text-4xl',
        'prose-h2:md:text-5xl',
        'prose-h3:text-3xl',
        'prose-h3:md:text-4xl',
        'prose-p:leading-normal',
        'prose-a:transition-all prose-a:duration-200',
        'prose-a:underline-offset-2',
        'prose-a:decoration-2',
        'prose-a:decoration-gray-300',
        'prose-a:hover:decoration-blue-600',
    ])>
    {{ $slot }}
</div>
