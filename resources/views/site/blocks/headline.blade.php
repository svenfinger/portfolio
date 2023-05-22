<div class="px-12 py-32">
    @switch($block->input('visual_tag'))
        @case(1)
            @php($tag_classes = "text-7xl leading-normal font-display font-semibold")
            @break
        @case(2)
            @php($tag_classes = "text-6xl leading-normal font-display font-semibold")
            @break
        @case(3)
            @php($tag_classes = "text-5xl leading-normal font-display font-semibold")
            @break
        @default
            @php($tag_classes = "text-lg leading-normal font-display font-semibold")
    @endswitch
    @if($block->input('tag'))
        <h{{$block->input('tag')}} class="{{ $tag_classes }}">{{ $block->input('title') }}</h{{$block->input('tag')}}>
    @else
        <div class="{{ $tag_classes }}">{{ $block->input('title') }}</div>
    @endif
</div>
