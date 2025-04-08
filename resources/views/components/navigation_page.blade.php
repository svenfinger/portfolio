@props(['page'])

@if($page === 'frontpage' || $page === 'work' || (is_object($page) && !$page->noindex))
    <x-section class="border-t border-gray-200" default_class="" space_top="medium" space_bottom="medium">
        <div class="max-w-screen-2xl m-auto px-6">
            <x-headline size="1">Up next</x-headline>
            @switch($page)
                @case('frontpage')
                    <x-headline size="1" class="inline-block">
                        <a href="{{ route('frontend.page', 'work') }}" class="text-gray-500 underline-offset-2 decoration-4 decoration-gray-300 hover:underline hover:text-black">
                            Work
                        </a>
                    </x-headline>
                    @break
                @case('work')
                    <x-headline size="1" class="inline-block">
                        <a href="{{ route('frontend.page', 'about') }}" class="text-gray-500 underline-offset-2 decoration-4 decoration-gray-300 hover:underline hover:text-black">
                            About
                        </a>
                    </x-headline>
                    @break
                @default
                    <x-headline size="1" class="inline-block">
                        <a href="{{ route('frontend.page', $page->slug) }}" class="text-gray-500 underline-offset-2 decoration-4 decoration-gray-300 hover:underline hover:text-black">
                            {{ $page->title }}
                        </a>
                    </x-headline>
            @endswitch
        </div>
    </x-section>
@endif
