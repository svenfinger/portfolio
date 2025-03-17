@extends('site.template')

@php
    $is_work = true;
@endphp

@section('content')
    <div class="relative">
        <img src="{{ $item->image('feature', 'default') }}" alt="{{ $item->imageAltText('feature') }}" class="relative z-0">
        <div class="gradient-blur-t absolute top-0 h-40 w-full z-10">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
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
                    <x-prose><strong>Description</strong></x-prose>
                    <x-prose>{{ $item->description }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <x-prose><strong>Type</strong></x-prose>
                    <x-prose>{{ $item->type }} ({{ $item->year }})</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <x-prose><strong>Role</strong></x-prose>
                    <x-prose>{{ $item->role }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <x-prose><strong>Process</strong></x-prose>
                    <x-prose>{{ $item->process }}</x-prose>
                </div>
            </div>
            <div class="flex flex-col gap-3 text-xl leading-normal border-t border-white/10 pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <x-prose><strong>Tools</strong></x-prose>
                    <x-prose>{!! $item->tools !!}</x-prose>
                </div>
            </div>
        </div>
    </x-section>
    <div class="px-6 sm:px-12">
        <div class="flex flex-col gap-12 py-24">
            <div class="flex flex-col gap-3 sm:gap-6 xl:gap-12">
                @foreach ($item->images('images', 'default') as $index => $image)
                    <img src="{{ $image }}" loading="eager">
                @endforeach
            </div>
        </div>
    </div>
    @if ($item->link_primary || $item->link_secondary)
        <x-section layout="2" default_class="px-6 sm:px-12 py-16 sm:pb-12 sm:pb-32">
            @if ($item->link_primary && $item->link_secondary)
                <x-headline size="2" class="mb-3">Project links</x-headline>
                <x-prose class="mb-12">Explore more from the project by visiting these links.</x-prose>
            @else
                <x-headline size="2" class="mb-3">Project link</x-headline>
                <x-prose class="mb-12">Explore more from the project by visiting this link.</x-prose>
            @endif
            <div class="grid sm:grid-cols-2 gap-4">
                F
                @if ($item->link_secondary)
                    <x-button type="secondary" size="large" href="{{ $item->link_secondary }}" target="_blank">{{ $item->link_secondary_label }}</x-button>
                @endif
            </div>
        </x-section>
    @endif
    <x-project_navigation :work="$item_next" />
@endsection
