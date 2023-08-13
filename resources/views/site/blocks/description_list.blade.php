<div class="px-6 py-16 sm:px-12 sm:py-32">
    <div class="flex flex-col gap-8">
        @foreach ($block->children as $child)
            <div class="flex flex-col gap-3 text-xl leading-normal border-t-2 border-white/30 border-dotted pt-3">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">{{ $child->input('label') }}</div>
                    <div class="prose prose-invert prose-p:text-xl prose-p:leading-normal prose-a:decoration-white/50 hover:prose-a:decoration-white prose-a:decoration-1 prose-a:underline-offset-2 prose-a:font-normal">{!! $child->input('value') !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
