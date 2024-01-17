@extends('site.template')

@section('content')
    <x-section default_class="px-6 sm:px-12 pt-20 sm:pt-40 pb-8 sm:pb-20 border-b border-white/10" layout="2">
        <a href="{{ route('frontend.page', 'projects') }}" class="text-xl leading-normal mt-6 opacity-50 hover:opacity-80">Projects &nbsp;⁄</a>
        <x-headline size="1">{{ $item->title }}</x-headline>
    </x-section>
    <x-section default_class="px-6 sm:px-12 pt-20 sm:pt-40 pb-6 sm:pb-12">
        <img src="{{ $item->image('share', 'default') }}" alt="{{ $item->imageAltText('cover') }}">
    </x-section>
    <x-section layout="2">
        <div class="flex flex-col gap-12">
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">Description</div>
                    <x-prose>{{ $item->description }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">Type</div>
                    <x-prose>{{ $item->type }} ({{ $item->year }})</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">Role</div>
                    <x-prose>{{ $item->role }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">Process</div>
                    <x-prose>{{ $item->process }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">Tools</div>
                    <x-prose>{!! $item->tools !!}</x-prose>
                </div>
            </div>
        </div>
    </x-section>
    <div class="px-6 sm:px-12 pb-16 sm:pb-32">
        <div class="flex flex-col gap-12 pt-24">
            <div class="flex flex-col gap-8">
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
