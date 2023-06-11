<div class="px-6 py-16 sm:px-12 sm:py-32">
    @php($default_tag_classes = "leading-normal font-display font-semibold mb-12")
    @switch($block->input('visual_tag'))
        @case(1)
            @php($tag_classes = "text-7xl " . $default_tag_classes)
            @break
        @case(2)
            @php($tag_classes = "text-6xl " . $default_tag_classes)
            @break
        @case(3)
            @php($tag_classes = "text-5xl " . $default_tag_classes)
            @break
        @default
            @php($tag_classes = "text-lg " . $default_tag_classes)
    @endswitch
    @if($block->input('tag'))
        <h{{$block->input('tag')}} class="{{ $tag_classes }}">{{ $block->input('title') }}</h{{$block->input('tag')}}>
    @else
        <div class="{{ $tag_classes }}">{{ $block->input('title') }}</div>
    @endif
    <div class="prose prose-invert prose-p:text-xl prose-p:leading-normal prose-a:no-underline hover:prose-a:underline prose-a:font-normal">{!! $block->input('text') !!}</div>
</div>
