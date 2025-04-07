@extends('site.template')

@section('content')
    <div>
        {!! $item->renderBlocks() !!}
    </div>
@endsection

@section('page_navigation')
    {{-- Page navigation --}}
    @if (isset($is_frontpage))
        <x-navigation_page page="frontpage" />
    @else
        <x-navigation_page :page="$item_next" />
    @endif
@endsection
