@props(['work'])

<x-section class="bg-black text-white"  space_top="medium" space_bottom="medium">
    <x-headline size="1" class="mb-6">Up next</x-headline>
    @if ($work)
        <a class="block relative rounded-lg overflow-hidden group" href="{{ route('frontend.work.detail', $work->slug) }}">
            <div class="absolute inset-0 z-10 bg-black/15 opacity-0 group-hover:opacity-100 transition-all duration-200"></div>

            @if ($work->file('feature_video'))
                <video autoplay loop muted preload poster="{{ $work->image('feature', 'default') }}">
                    <source src="{{ $work->file('feature_video') }}" type="video/mp4">
                </video>
            @else
                <img src="{{ $work->image('feature', 'default') }}" alt="{{ $work->imageAltText('cover') }}"
                     class="w-full relative z-0" width="1208" height="680">
            @endif

            <div class="absolute bottom-0 w-full z-30 px-6 py-4.5 text-white sm:flex justify-between">
                <div class="text-xl sm:text-2xl leading-normal font-display font-semibold">
                    {{ $work->title }}
                    @php
                        $createdDate = new DateTime($work->created_at);
                        $thresholdDate = new DateTime("first day of 2 months ago");
                        $new = false;

                        if ($createdDate > $thresholdDate) {
                            $new = true;
                        }
                    @endphp
                    @if ($new)
                        <x-badge type="critical" class="relative ml-1 -top-1">New</x-badge>
                    @endif
                </div>
                <div class="text-xl sm:text-2xl leading-normal">{{ $work->company }} {{ $work->year }}</div>
            </div>

            <div class="gradient-blur-b absolute bottom-0 h-24 w-full z-20">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="absolute inset-0 top-auto h-32 sm:h-24 bg-linear-to-b from-transparent to-black/30 z-10"></div>
        </a>
    @else
        <a href="{{ route('frontend.page', 'about') }}">
            <x-headline size="1">About</x-headline>
        </a>
    @endif
</x-section>
