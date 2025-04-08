<x-section class="relative overflow-hidden -mt-16 pt-32 sm:pt-16" space_top="large" space_bottom="large">
    <div class="relative z-10">
        <div class="size-30 sm:size-40 mb-6">
            <canvas id="hero-logo" class="max-w-full max-h-full"></canvas>
        </div>
        <x-headline size="1" class="pb-6 sm:pb-8">{{ $block->input('title') }}</x-headline>
        <div class="grid gap-6 sm:grid-cols-12">
            <div class="flex flex-col sm:col-span-7">
                <x-prose size="large" class="mb-12">{!! $block->input('text') !!}</x-prose>
                <div class="flex gap-6">
                    <x-button type="primary" href="{{ $block->getRelated('primary_button_link')[0]->slug }}">{{ $block->input('primary_button_label') }}</x-button>
                    <x-button type="secondary" href="{{ $block->getRelated('secondary_button_link')[1]->slug }}">{{ $block->input('secondary_button_label') }}</x-button>
                </div>
            </div>
            <x-prose size="large" class="sm:col-start-9 sm:col-span-4">{!! $block->input('sidenote') !!}</x-prose>
        </div>
    </div>
</x-section>
