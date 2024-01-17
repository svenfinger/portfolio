<x-section default_class="px-6 sm:px-12 pt-20 sm:pt-40 pb-8 sm:pb-20 border-b border-white/10" layout="{{ $block->input('layout') }}">
    <x-headline size="1">{{ $block->input('title') }}</x-headline>
    <x-prose class="mt-6">{!! $block->input('text') !!}</x-prose>
</x-section>
