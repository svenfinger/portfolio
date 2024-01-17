<x-section layout="{{ $block->input('layout') }}">
    <x-headline class="mb-12">{{ $block->input('title') }}</x-headline>
    <div class="grid lg:grid-cols-2 gap-x-12">
        @foreach ($block->children as $child)
            <div @class([
                'text-2xl leading-normal py-2',
                'border-t border-white/10' => $loop->index > 1,
                'border-t border-white/10 lg:border-none' => $loop->index == 1,
            ])>
                {{ $child->input('text') }}
            </div>
        @endforeach
    </div>
</x-section>
