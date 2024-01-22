@props(['project'])

@if ($project)
    <x-section layout="2" default_class="px-6 py-6 sm:px-12 sm:py-12 border-t border-white/10">
        <a href="{{ route('frontend.project', $project->slug) }}" class="group">
            <div class="text-lg leading-normal opacity-50 mb-2 group-hover:opacity-80">Next project</div>
            <x-headline size="2" class="opacity-80 group-hover:opacity-100">{{ $project->title }}</x-headline>
        </a>
    </x-section>
@else
    <x-section layout="2" default_class="px-6 py-6 sm:px-12 sm:py-12 border-t border-white/10">
        <a href="{{ route('frontend.page', 'about') }}" class="group">
            <div class="text-lg leading-normal opacity-50 mb-2 group-hover:opacity-80">Next page</div>
            <x-headline size="2" class="opacity-80 group-hover:opacity-100">About</x-headline>
        </a>
    </x-section>
@endif
