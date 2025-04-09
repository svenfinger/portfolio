@extends('site.template')

@section('content')
    <x-section space_top="large" space_bottom="none">
        <x-headline size="1">Work</x-headline>
    </x-section>

    <x-section space_top="medium">
        <div class="grid gap-6 sm:grid-cols-2">
            @foreach($items as $work)
                <a class="relative rounded-lg overflow-hidden group" href="{{ route('frontend.work.detail', $work->slug) }}">
                    <div class="absolute inset-0 z-10 bg-black/15 opacity-0 group-hover:opacity-100 transition-all duration-200"></div>

                    @if ($work->file('grid_video'))
                        <video playsinline autoplay muted loop preload>
                            <source src="{{ $work->file('grid_video') }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ $work->image('grid', 'default') }}" alt="{{ $work->imageAltText('cover') }}"
                             class="w-full relative z-0" width="1208" height="680">
                    @endif

                    <div class="absolute bottom-0 w-full z-30 px-6 py-4.5 text-white">
                        <div class="text-2xl leading-normal font-display font-semibold">
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
                        <div class="text-2xl leading-normal">{{ $work->year }} {{ $work->company }}</div>
                    </div>

                    <div class="gradient-blur-b absolute bottom-0 h-40 w-full z-20">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                    <div class="absolute inset-0 bg-linear-to-b from-black/0 to-black/20 z-10"></div>
                </a>
            @endforeach
        </div>
    </x-section>
@endsection

@section('page_navigation')
    {{-- Work navigation --}}
    <x-navigation_page page="work" />
@endsection
