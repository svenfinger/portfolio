@extends('site.template')

@section('content')
    <div class="px-6 sm:px-12 py-16 sm:py-32">
        <h1 class="text-4xl md:text-6xl leading-tight md:leading-tight font-bold tracking-tight max-w-screen-lg">{{ $item->title }}</h1>
    </div>
    <div class="px-6 sm:px-12 pb-16 sm:pb-32">
        <div class="grid gap-12 xl:grid-cols-2">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                        <div class="font-medium">Description</div>
                        <div class="text-xl leading-normal">{{ $item->description }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                        <div class="font-medium">Type</div>
                        <div class="text-xl leading-normal">{{ $item->type }} ({{ $item->year }})</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                        <div class="font-medium">Role</div>
                        <div class="text-xl leading-normal">{{ $item->role }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                        <div class="font-medium">Process</div>
                        <div class="text-xl leading-normal">{{ $item->process }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                    <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                        <div class="font-medium">Tools</div>
                        <div class="text-xl leading-normal">{!! $item->tools !!}</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <img src="{{ $item->image('cover', 'default') }}" alt="{{ $item->imageAltText('cover') }}">
                @foreach ($item->images('images', 'default') as $index => $image)
                    @if ($index <= 1)
                        <img src="{{ $image }}" loading="eager">
                    @endif
                @endforeach
            </div>
        </div>
        @if (count($item->images('images', 'default')) > 2)
            <div class="flex flex-col gap-8 mt-8">
                @foreach ($item->images('images', 'default') as $index => $image)
                    @if ($index > 1)
                        <img src="{{ $image }}" loading="eager">
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endsection
