<div class="pt-16 sm:pt-72 pb-24 px-6 sm:px-12 grid sm:grid-cols-2 gap-12">
    <x-headline size="1">{{ $block->input('title') }}</x-headline>
    <x-prose size="large" class="pt-3">{!! $block->input('text') !!}</x-prose>
</div>
