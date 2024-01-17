<x-section layout="{{ $block->input('layout') }}">
    <div class="grid lg:grid-cols-2 lg:gap-12 border-t border-white/10 pt-24 mb-24">
        <div>
            <x-headline class="mb-12">{{ $block->input('title') }}</x-headline>
            <x-prose size="large" class="pt-3">{!! $block->input('text') !!}</x-prose>
        </div>
        <div class="flex flex-col gap-20 pt-4">
            <div class="flex flex-col gap-6 sm:gap-12">
                @foreach ($block->children as $child)
                    <div class="flex items-center gap-4 sm:gap-6">
                        <div class="bg-gray-900 w-10 sm:w-[72px] h-10 sm:h-[72px] flex items-center justify-center shrink-0">
                            <img src="{{ $child->image('image', 'default') }}" alt="" class="w-6 sm:w-10 h-6 sm:h-10">
                        </div>
                        <div class="grow">
                            <div class="sm:text-lg 2xl:text-2xl font-semibold leading-normal">{{ $child->input('title') }}</div>
                            <div class="sm:text-lg 2xl:text-2xl leading-normal">{{ $child->input('company') }}</div>
                        </div>
                        <div class="flex flex-col items-center gap-0.5 text-sm sm:text-base w-10 sm:w-12">
                            <div>{{ $child->input('to') }}</div>
                            <svg width="10" height="14" viewBox="0 0 10 14" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="opacity-50">
                                <path d="M5.44194 0.558058C5.19786 0.313981 4.80214 0.313981 4.55806 0.558058L0.580583 4.53553C0.336505 4.77961 0.336505 5.17534 0.580583 5.41942C0.82466 5.6635 1.22039 5.6635 1.46447 5.41942L5 1.88388L8.53553 5.41942C8.77961 5.6635 9.17534 5.6635 9.41942 5.41942C9.6635 5.17534 9.6635 4.77961 9.41942 4.53553L5.44194 0.558058ZM4.375 13C4.375 13.3452 4.65482 13.625 5 13.625C5.34518 13.625 5.625 13.3452 5.625 13H4.375ZM4.375 1V13H5.625V1H4.375Z" />
                            </svg>
                            <div>{{ $child->input('from') }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="grid 2xl:grid-cols-2 gap-4">
                <x-button type="secondary" size="large" href="{{ $block->input('secondary_button_link') }}">{{ $block->input('secondary_button_label') }}</x-button>
                <x-button type="primary" size="large" href="{{ $block->input('primary_button_link') }}">{{ $block->input('primary_button_label') }}</x-button>
            </div>
        </div>
    </div>
</x-section>
