<x-section class="relative overflow-hidden" space_top="large" space_bottom="large">
    <div class="relative z-10">
        <x-headline size="1" class="pb-8">{{ $block->input('title') }}</x-headline>
        <div class="grid grid-cols-12">
            <div class="flex flex-col col-span-7">
                <x-prose size="large" class="mb-12">{!! $block->input('text') !!}</x-prose>
                <div class="flex gap-6">
                    <x-button type="primary" href="{{ $block->getRelated('primary_button_link')[0]->slug }}">{{ $block->input('primary_button_label') }}</x-button>
                    <x-button type="secondary" href="{{ $block->getRelated('secondary_button_link')[1]->slug }}">{{ $block->input('secondary_button_label') }}</x-button>
                </div>
            </div>
            <x-prose size="large" class="col-start-9 col-span-4">{!! $block->input('sidenote') !!}</x-prose>
        </div>
    </div>
    <canvas id="canvas3d" class="absolute inset-0"></canvas>
</x-section>
