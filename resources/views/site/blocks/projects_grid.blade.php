@php

    use A17\Twill\Models\Feature;

    $projects = Feature::getForBucket('home_featured_projects');

@endphp
<div class="px-6 py-16 sm:px-12 sm:py-32">
    <div class="text-4xl md:text-6xl leading-tight md:leading-tight font-bold tracking-tight max-w-screen-lg mb-12">{{ $block->input('title') }}</div>
    <div class="grid gap-6 sm:grid-cols-2 sm:gap-12 mb-12">
        @foreach($projects as $project)
            <a class="group border-t-2 border-white/30 border-dotted flex flex-col gap-6 pt-6 decoration-1 underline-offset-2" href="{{ route('frontend.project', $project->slug) }}">
                <div class="grid md:grid-cols-2">
                    <div class="flex flex-col mb-6 md:mb-0">
                        <div class="text-xl leading-normal font-semibold group-hover:underline group-hover:decoration-1 group-hover:decoration-white/50">{{ $project->title }}</div>
                        <div class="text-xl leading-normal text-gray-400">{{ $project->client }}</div>
                    </div>
                    <div class="text-xl leading-normal font-semibold">{{ '@' . $project->company }} · {{ $project->year }}</div>
                </div>
                <img src="{{ $project->image('cover', 'default') }}" alt="{{ $project->imageAltText('cover') }}" class="group-hover:brightness-110 w-full" width="1208" height="680">
            </a>
        @endforeach
    </div>
    <a href="{{ route('frontend.page', 'projects') }}" class="bg-white/30 hover:bg-white/40 py-6 px-8 font-medium flex justify-between text-3xl">
        <span>More projects</span>
        <span>→</span>
    </a>
</div>
