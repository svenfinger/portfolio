@php($default_tag_classes = "leading-tight font-bold tracking-tight max-w-screen-lg")
@switch($block->input('visual_tag'))
    @case(1)
        @php($tag_classes = "text-7xl " . $default_tag_classes)
        @php($wrapper_classes = "px-6 sm:px-12 py-16 sm:py-32")
        @break
    @case(2)
        @php($wrapper_classes = "px-6 sm:px-12 pt-16 sm:pt-32")
        @break
    @case(3)
        @php($wrapper_classes = "px-6 sm:px-12 pt-16 sm:pt-32")
        @break
    @default
        @php($wrapper_classes = "px-6 sm:px-12 pt-8 sm:pt-16")
        @break
@endswitch
<div class="{{ $wrapper_classes }}">
    @if($block->input('tag'))
        @switch($block->input('visual_tag'))
            @case(1)
                @php($tag_classes = "text-7xl " . $default_tag_classes)
                <h1 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h1>
                @break
            @case(2)
                @php($tag_classes = "text-6xl " . $default_tag_classes)
                <h2 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h2>
                @break
            @case(3)
                @php($tag_classes = "text-5xl " . $default_tag_classes)
                <h3 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h3>
                @break
        @endswitch
    @else
        <div class="{{ $tag_classes }}">
            {{ $block->input('title') }}
        </div>
    @endif
</div>
