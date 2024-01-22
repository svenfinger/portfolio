@extends('site.template')

@section('content')
    {!! $item->renderBlocks() !!}

    {{-- Page navigation --}}
    @if (isset($is_frontpage))
        <x-page_navigation page="frontpage" />
    @else
        <x-page_navigation :page="$item_next" />
    @endif
@endsection
