@props(['page'])

@if ($page == 'frontpage')
    <x-section default_class="px-6 py-6 sm:px-12 sm:py-12 border-t border-white/10">
        <a href="{{ route('frontend.page', 'projects') }}" class="group">
            <div class="text-lg leading-normal opacity-50 mb-2 group-hover:opacity-80">Next page</div>
            <x-headline size="2" class="opacity-80 group-hover:opacity-100">Projects</x-headline>
        </a>
    </x-section>
@elseif ($page == 'projects')
    <x-section default_class="px-6 py-6 sm:px-12 sm:py-12 border-t border-white/10">
        <a href="{{ route('frontend.page', 'about') }}" class="group">
            <div class="text-lg leading-normal opacity-50 mb-2 group-hover:opacity-80">Next page</div>
            <x-headline size="2" class="opacity-80 group-hover:opacity-100">About</x-headline>
        </a>
    </x-section>
@elseif ($page && !$page->noindex)
    <x-section default_class="px-6 py-6 sm:px-12 sm:py-12 border-t border-white/10">
        <a href="{{ route('frontend.page', $page->slug) }}" class="group">
            <div class="text-lg leading-normal opacity-50 mb-2 group-hover:opacity-80">Next page</div>
            <x-headline size="2" class="opacity-80 group-hover:opacity-100">{{ $page->title }}</x-headline>
        </a>
    </x-section>
@endif
