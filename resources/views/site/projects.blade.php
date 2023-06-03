@extends('site.template')

@section('content')
    <div class="px-12 py-32">
        <div class="text-5xl leading-tight font-display mb-12">Projects</div>
        <div class="grid grid-cols-2 gap-12 mb-12">
            @foreach($items as $project)
                <a class="group border-t border-gray-600 flex flex-col gap-6 pt-6 decoration-from-font" href="{{ route('frontend.project', $project->slug) }}">
                    <div class="grid grid-cols-2">
                        <div class="flex flex-col">
                            <div class="text-xl leading-normal font-medium group-hover:underline">{{ $project->title }}</div>
                            <div class="text-xl leading-normal text-gray-400">{{ $project->client }}</div>
                        </div>
                        <div class="text-xl leading-normal font-medium">{{ '@' . $project->company }} · {{ $project->year }}</div>
                    </div>
                    <img src="{{ $project->image('cover', 'default') }}" alt="{{ $project->imageAltText('cover') }}">
                </a>
            @endforeach
        </div>
        <a href="{{ route('frontend.page', 'projects') }}" class="bg-white/30 hover:bg-white/40 py-6 px-8 font-display flex justify-between text-3xl">
            <span>More projects</span>
            <span>→</span>
        </a>
    </div>
@endsection
