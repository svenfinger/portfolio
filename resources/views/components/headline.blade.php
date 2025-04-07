@props(['size' => 1, 'class' => ''])
@php($default_classes = "leading-tight md:leading-tight font-display $class")

@switch($size)
    @case(1)
        <h1 {{ $attributes->merge(['class' => "text-5xl md:text-6xl font-semibold tracking-tight $default_classes"]) }}>
            {{ $slot }}
        </h1>
        @break
    @case(2)
        <h2 {{ $attributes->merge(['class' => "text-4xl md:text-5xl font-semibold $default_classes"]) }}>
            {{ $slot }}
        </h2>
        @break
    @case(3)
        <h3 {{ $attributes->merge(['class' => "text-3xl md:text-4xl font-semibold $default_classes"]) }}>
            {{ $slot }}
        </h3>
        @break
    @case(4)
        <h4 {{ $attributes->merge(['class' => "text-xl font-semibold $default_classes"]) }}>
            {{ $slot }}
        </h4>
        @break
@endswitch
