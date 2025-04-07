@props(['default_class' => 'px-6', 'class' => '', 'space_top' => 'large', 'space_bottom' => 'large'])

<div @class([
        $default_class,
        $class,
        'pt-24 sm:pt-48' => $space_top === 'large',
        'pt-24' => $space_top === 'medium',
        'pb-24 sm:pb-48' => $space_bottom === 'large',
        'pb-24' => $space_bottom === 'medium',
    ])>
    {{ $slot }}
</div>
