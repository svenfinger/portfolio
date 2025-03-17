@php

    use A17\Twill\Models\Feature;

    $featured_work = Feature::getForBucket('home_featured_work');

@endphp

<x-section space_top="medium" space_bottom="large">
    <x-headline size="1" class="mb-6">Featured Work</x-headline>

    <div class="flex flex-col gap-6">
        @foreach($featured_work as $work)
            <a class="relative rounded-lg overflow-hidden" href="{{ route('frontend.work.detail', $work->slug) }}">

                @if ($work->file('feature_video'))
                    <video autoplay loop muted preload poster="{{ $work->image('feature', 'default') }}">
                        <source src="{{ $work->file('feature_video') }}" type="video/mp4">
                    </video>
                @else
                    <img src="{{ $work->image('feature', 'default') }}" alt="{{ $work->imageAltText('cover') }}"
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
                    <div class="text-2xl leading-normal">{{ $work->client }} {{ $work->year }}</div>
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
