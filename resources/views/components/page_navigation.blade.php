@props(['page'])

@if($page === 'frontpage' || $page === 'work' || (is_object($page) && !$page->noindex))
    <x-section class="border-t border-gray-200" space_top="medium" space_bottom="medium">
        <x-headline size="1">Up next</x-headline>
        @switch($page)
            @case('frontpage')
                <a href="{{ route('frontend.page', 'work') }}" class="text-gray-600 hover:text-blue-600 duration-200 ease-in-out">
                    <x-headline size="1" class="inline-block">Work</x-headline>
                </a>
                @break
            @case('work')
                <a href="{{ route('frontend.page', 'about') }}" class="text-gray-600 hover:text-blue-600 duration-200 ease-in-out">
                    <x-headline size="1" class="inline-block">About</x-headline>
                </a>
                @break
            @default
                <a href="{{ route('frontend.page', $page->slug) }}" class="text-gray-600 hover:text-blue-600 duration-200 ease-in-out">
                    <x-headline size="1" class="inline-block">{{ $page->title }}</x-headline>
                </a>
        @endswitch
    </x-section>
@endif
