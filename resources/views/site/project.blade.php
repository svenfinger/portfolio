@extends('site.template')

@section('content')
    <div class="px-12 py-16">
        <h1 class="text-6xl leading-normal font-display font-semibold">{{ $item->title }}</h1>
    </div>
    <div class="px-12 pt-16 pb-32">
        <div class="grid gap-12 xl:grid-cols-2">
            <div class="flex flex-col gap-8">
                <div class="flex flex-col gap-3 text-xl leading-normal">
                    <hr class="border-white/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-medium">Description</div>
                        <div class="text-xl leading-normal">{{ $item->description }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal">
                    <hr class="border-white/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-medium">Type</div>
                        <div class="text-xl leading-normal">{{ $item->type }} ({{ $item->year }})</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal">
                    <hr class="border-white/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-medium">Role</div>
                        <div class="text-xl leading-normal">{{ $item->role }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal">
                    <hr class="border-white/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-medium">Process</div>
                        <div class="text-xl leading-normal">{{ $item->process }}</div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 text-xl leading-normal">
                    <hr class="border-white/30">
                    <div class="grid grid-cols-2 gap-6">
                        <div class="font-medium">Tools</div>
                        <div class="text-xl leading-normal">{!! $item->tools !!}</div>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-8">
                <img src="{{ $item->image('cover', 'default') }}" alt="{{ $item->imageAltText('cover') }}">
                @foreach ($item->images('images', 'default') as $index => $image)
                    @if ($index < 2)
                        <img src="{{ $image }}" />
                    @endif
                @endforeach
            </div>
        </div>
        @if (count($item->images('images', 'default')) > 3)
            <div class="flex flex-col gap-8 mt-8">
                @foreach ($item->images('images', 'default') as $index => $image)
                    @if ($index >= 3)
                        <img src="{{ $image }}" />
                    @endif
                @endforeach
            </div>
        @endif
    </div>
@endsection