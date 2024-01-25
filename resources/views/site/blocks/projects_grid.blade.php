@php

    use A17\Twill\Models\Feature;

    $projects = Feature::getForBucket('home_featured_projects');

@endphp
<div class="px-6 pb-36 sm:px-12 sm:pb-72">
    <div class="grid gap-6 sm:grid-cols-2 sm:gap-12 mb-12">
        @foreach($projects as $project)
            <a class="group flex flex-col gap-3 pt-6 decoration-1 underline-offset-2" href="{{ route('frontend.project', $project->slug) }}">
                <img src="{{ $project->image('cover', 'default') }}" alt="{{ $project->imageAltText('cover') }}" class="opacity-90 group-hover:opacity-100 w-full" width="1208" height="680">
                <div>
                    <div class="text-2xl leading-normal font-semibold opacity-80 group-hover:opacity-100">
                        {{ $project->title }}
                        @php
                            $createdDate = new DateTime($project->created_at);
                            $thresholdDate = new DateTime("first day of 2 months ago");
                            $new = false;

                            if ($createdDate > $thresholdDate) {
                                $new = true;
                            }
                        @endphp
                        @if ($new)
                            <x-badge type="urgent" class="relative ml-1 -top-1">New</x-badge>
                        @endif
                    </div>
                    <div class="text-2xl leading-normal opacity-60 group-hover:opacity-80">{{ $project->client }}</div>
                </div>
            </a>
        @endforeach
    </div>
    <x-button type="primary" size="large" href="{{ route('frontend.page', 'projects') }}">More projects</x-button>
</div>
