<div class="px-6 py-16 sm:px-12 sm:py-32">
    @if ($block->input('layout') == 2)
    <div class="grid grid-cols-1 sm:grid-cols-12 gap-12">
        <div class="sm:col-start-3 sm:col-span-8">
    @endif
    <x-headline size="{{ $block->input('size') }}" class="mb-12">{{ $block->input('title') }}</x-headline>
    <x-prose>{!! $block->input('text') !!}</x-prose>
    @if ($block->input('layout') == 2)
        </div>
    </div>
    @endif
</div>
