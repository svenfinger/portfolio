<div class="grid lg:grid-cols-2 gap-12 mb-24">
    <x-headline class="lg:mb-12">{{ $block->input('title') }}</x-headline>
    <x-prose size="large" class="pt-3">{!! $block->input('text') !!}</x-prose>
</div>
<div class="flex flex-col gap-24">
    @foreach ($block->children as $child)
        <div class="grid lg:grid-cols-2 lg:gap-12 border-t border-gray-200 pt-8">
            <x-headline size="3" class="mb-4">{{ $child->input('title') }}</x-headline>
            <x-prose class="pt-1">{!! $child->input('text') !!}</x-prose>
        </div>
    @endforeach
</div>
