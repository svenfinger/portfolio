@php
    /** @var \A17\Twill\Services\Blocks\RenderData $renderData */
@endphp
<x-section class="flex flex-col gap-6" space_top="{{ $block->input('space_top') }}" space_bottom="{{ $block->input('space_bottom') }}">
    {!! $renderData->renderChildren('content') !!}
</x-section>
