<x-section layout="{{ $block->input('layout') }}">
    <div class="grid lg:grid-cols-2 gap-12">
        <img src="{{ $block->image('image', 'default') }}" alt="">
        <x-prose size="large">{!! $block->input('text') !!}</x-prose>
    </div>
</x-section>
