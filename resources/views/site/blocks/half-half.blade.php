@php
    /** @var \A17\Twill\Services\Blocks\RenderData $renderData */
@endphp
<div class="grid grid-cols-12 gap-6">
    <div class="col-span-6">
        {!! $renderData->renderChildren('left') !!}
    </div>
    <div class="col-span-6">
        {!! $renderData->renderChildren('right') !!}
    </div>
</div>
