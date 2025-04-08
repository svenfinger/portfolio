<div class="flex flex-col gap-8">
    @foreach ($block->children as $child)
        <div class="flex flex-col gap-3 text-xl leading-normal border-t border-gray-200 pt-3">
            <div class="grid sm:grid-cols-2 gap-3 sm:gap-6">
                <x-prose><strong>{{ $child->input('label') }}</strong></x-prose>
                <x-prose>{!! $child->input('value') !!}</x-prose>
            </div>
        </div>
    @endforeach
</div>
