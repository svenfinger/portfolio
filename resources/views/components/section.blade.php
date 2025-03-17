@props(['layout' => 1, 'default_class' => 'px-6', 'class' => '', 'space_top' => 'large', 'space_bottom' => 'large'])

<div @class([
        $default_class,
        $class,
        'pt-48' => $space_top === 'large',
        'pt-24' => $space_top === 'medium',
        'pb-48' => $space_bottom === 'large',
        'pb-24' => $space_bottom === 'medium',
    ])>
    @if ($layout == 2)
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-6">
            <div class="col-start-4 col-span-6">
                {{ $slot }}
            </div>
        </div>
    @else
        {{ $slot }}
    @endif
</div>
