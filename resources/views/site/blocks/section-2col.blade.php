@php
    /** @var \A17\Twill\Services\Blocks\RenderData $renderData */
@endphp
<x-section space_top="{{ $block->input('space_top') }}" space_bottom="{{ $block->input('space_bottom') }}">
    <div class="grid sm:grid-cols-2 gap-6">
        <div class="flex flex-col gap-6">
            {!! $renderData->renderChildren('left') !!}
        </div>
        <div class="flex flex-col gap-6">
            {!! $renderData->renderChildren('right') !!}
        </div>
    </div>
</x-section>
