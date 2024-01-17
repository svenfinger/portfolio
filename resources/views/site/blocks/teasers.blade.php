<div class="px-6 pb-16 sm:px-12 sm:pb-32">
    <div class="grid sm:grid-cols-2 gap-12">
        @foreach ($block->children as $child)
            <div class="border-t border-white/10 pt-12">
                <x-headline size="2" class="mb-4">{{ $child->input('title') }}</x-headline>
                <x-prose class="mb-12">{!! $child->input('text') !!}</x-prose>
                <x-button type="secondary" href="{{ $child->getRelated('link')[0]->slug }}">{{ $child->input('link_text') }}</x-button>
            </div>
        @endforeach
    </div>
</div>
