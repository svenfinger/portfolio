@extends('site.template')

@section('content')
    <x-section default_class="px-6 sm:px-12 pt-20 sm:pt-40 pb-8 sm:pb-20 border-b border-white/10">
        <x-headline size="1">Projects</x-headline>
    </x-section>
    <div class="px-6 py-16 sm:px-12 sm:py-32">
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3 sm:gap-12 mb-12">
            @foreach($items as $project)
                <a class="group flex flex-col gap-3 decoration-1 underline-offset-2" href="{{ route('frontend.project', $project->slug) }}">
                    <img src="{{ $project->image('cover', 'default') }}" alt="{{ $project->imageAltText('cover') }}" class="opacity-90 group-hover:opacity-100 w-full" width="1208" height="680">
                    <div>
                        <div class="text-xl leading-normal font-semibold opacity-80 group-hover:opacity-100">
                            {{ $project->title }}
                            @php
                                $createdDate = new DateTime($project->created_at);
                                $thresholdDate = new DateTime("first day of 6 months ago");
                                $new = false;

                                if ($createdDate > $thresholdDate) {
                                    $new = true;
                                }
                            @endphp
                            @if ($new)
                                <x-badge type="urgent" class="relative ml-1 -top-0.5">New</x-badge>
                            @endif
                        </div>
                        <div class="text-xl leading-normal opacity-60 group-hover:opacity-80">{{ $project->client }}</div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
@endsection
