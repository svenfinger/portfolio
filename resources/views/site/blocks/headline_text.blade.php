<x-section layout="{{ $block->input('layout') }}">
    <x-headline size="{{ $block->input('size') }}" class="mb-12">{{ $block->input('title') }}</x-headline>
    <x-prose>{!! $block->input('text') !!}</x-prose>
</x-section>
