@props(['layout' => 1, 'spacing' => 'medium', 'default_class' => 'px-6 py-16 sm:px-12 sm:py-32'])

@if ($layout == 2)
    <div class="{{ $default_class }}">
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-12">
            <div class="sm:col-start-2 sm:col-span-10 xl:col-start-3 xl:col-span-8">
                {{ $slot }}
            </div>
        </div>
    </div>
@else
    <div class="{{ $default_class }}">
        {{ $slot }}
    </div>
@endif
