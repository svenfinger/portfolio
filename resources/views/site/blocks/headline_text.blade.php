<div>
    <x-prose>
        @switch($block->input('size'))
            @case(1)
                <h1>{{ $block->input('title') }}</h1>
                @break
            @case(2)
                <h2>{{ $block->input('title') }}</h2>
                @break
            @case(3)
                <h3>{{ $block->input('title') }}</h3>
                @break
            @case(4)
                <h4>{{ $block->input('title') }}</h4>
                @break
        @endswitch
        {!! $block->input('text') !!}
    </x-prose>
</div>
