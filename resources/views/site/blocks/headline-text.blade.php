@php($default_tag_classes = "leading-tight md:leading-tight font-bold tracking-tight max-w-screen-lg mb-12")
@switch($block->input('visual_tag'))
    @case(1)
        @php($tag_classes = "text-5xl md:text-7xl " . $default_tag_classes)
        @php($wrapper_classes = "px-6 sm:px-12 py-16 sm:py-32")
        @break
    @case(2)
        @php($tag_classes = "text-4xl md:text-6xl " . $default_tag_classes)
        @php($wrapper_classes = "px-6 sm:px-12 pt-16 sm:pt-32")
        @break
    @case(3)
        @php($tag_classes = "text-3xl md:text-5xl " . $default_tag_classes)
        @php($wrapper_classes = "px-6 sm:px-12 pt-16 sm:pt-32")
        @break
    @default
        @php($tag_classes = $default_tag_classes)
        @php($wrapper_classes = "px-6 sm:px-12 pt-8 sm:pt-16")
        @break
@endswitch
<div class="px-6 py-16 sm:px-12 sm:py-32">
    @if($block->input('tag'))
        @switch($block->input('visual_tag'))
            @case(1)
                <h1 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h1>
                @break
            @case(2)
                <h2 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h2>
                @break
            @case(3)
                <h3 class="{{ $tag_classes }}">
                    {{ $block->input('title') }}
                </h3>
                @break
        @endswitch
    @else
        @php($tag_classes = "text-xl mb-12 " . $default_tag_classes)
        <div class="{{ $tag_classes }}">
            {{ $block->input('title') }}
        </div>
    @endif
    <div class="prose prose-invert prose-p:text-xl prose-p:leading-normal prose-a:decoration-white/50 hover:prose-a:decoration-white prose-a:decoration-1 prose-a:underline-offset-2 prose-a:font-normal prose-ol:text-xl prose-ul:text-xl">{!! $block->input('text') !!}</div>
</div>
