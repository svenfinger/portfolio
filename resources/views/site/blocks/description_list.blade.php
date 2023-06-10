<div class="px-6 py-16 sm:px-12 sm:py-32">
    <div class="flex flex-col gap-8">
        @foreach ($block->children as $child)
            <div class="flex flex-col gap-3 text-xl leading-normal">
                <hr class="border-white/30">
                <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                    <div class="font-medium">{{ $child->input('label') }}</div>
                    <div class="prose prose-invert prose-p:text-xl prose-p:leading-normal prose-a:no-underline hover:prose-a:underline prose-a:font-normal">{!! $child->input('value') !!}</div>
                </div>
            </div>
        @endforeach
    </div>
</div>
