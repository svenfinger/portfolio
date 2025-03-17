<x-section layout="{{ $block->input('layout') }}" space_top="large" space_bottom="medium">
    <x-headline size="1">{{ $block->input('title') }}</x-headline>
    <x-prose class="mt-6">{!! $block->input('text') !!}</x-prose>
</x-section>
