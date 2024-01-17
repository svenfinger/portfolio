<x-section layout="{{ $block->input('layout') }}">
    <div class="grid lg:grid-cols-2 gap-12 border-t border-white/10 pt-24 mb-24">
        <x-headline class="lg:mb-12">{{ $block->input('title') }}</x-headline>
        <x-prose size="large" class="pt-3">{!! $block->input('text') !!}</x-prose>
    </div>
    <div class="flex flex-col gap-12">
        @foreach ($block->children as $child)
            <div class="grid lg:grid-cols-2 lg:gap-12 border-t border-white/10 pt-8">
                <div class="text-3xl font-semibold mb-4">{{ $child->input('title') }}</div>
                <x-prose size="small" class="pt-1">{!! $child->input('text') !!}</x-prose>
            </div>
        @endforeach
    </div>
</x-section>
