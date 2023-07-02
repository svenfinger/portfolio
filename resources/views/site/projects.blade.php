@extends('site.template')

@section('content')
    <div class="px-6 py-16 sm:px-12 sm:py-32">
        <div class="text-6xl leading-tight font-bold tracking-tight mb-32">Projects</div>
        <div class="grid gap-6 sm:grid-cols-2 sm:gap-12 mb-12">
            @foreach($items as $project)
                <a class="group border-t-2 border-white/30 border-dotted flex flex-col gap-6 pt-6 decoration-from-font" href="{{ route('frontend.project', $project->slug) }}">
                    <div class="grid grid-cols-2">
                        <div class="flex flex-col">
                            <div class="text-xl leading-normal font-semibold group-hover:underline">{{ $project->title }}</div>
                            <div class="text-xl leading-normal text-gray-400">{{ $project->client }}</div>
                        </div>
                        <div class="text-xl leading-normal font-semibold">{{ '@' . $project->company }} · {{ $project->year }}</div>
                    </div>
                    <img src="{{ $project->image('cover', 'default') }}" alt="{{ $project->imageAltText('cover') }}">
                </a>
            @endforeach
        </div>
    </div>
@endsection
