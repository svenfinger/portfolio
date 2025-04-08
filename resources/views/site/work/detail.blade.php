@extends('site.template')

@php
    $is_work = true;
@endphp

@section('content')
    <x-section>
        <div class="grid sm:grid-cols-2 gap-24 sm:gap-6 mb-24">
            <div>
                <x-headline size="1">
                    {{ $item->title }}
                    @php
                        $createdDate = new DateTime($item->created_at);
                        $thresholdDate = new DateTime("first day of 2 months ago");
                        $new = false;

                        if ($createdDate > $thresholdDate) {
                            $new = true;
                        }
                    @endphp
                    @if ($new)
                        <x-badge type="critical" class="relative ml-1 -top-3 text-white">New</x-badge>
                    @endif
                </x-headline>
                <x-prose>{{ $item->company }} {{ $item->year }}</x-prose>
            </div>
            <div class="pt-3">
                <x-prose size="large">{!! $item->description !!}</x-prose>
            </div>
        </div>

        <img class="rounded-lg" src="{{ $item->image('feature', 'default') }}" alt="{{ $item->imageAltText('feature') }}">
    </x-section>

    {!! $item->renderBlocks() !!}
@endsection

@section('page_navigation')
    {{-- Work navigation --}}
    <x-navigation_work :work="$item_next" />
@endsection
