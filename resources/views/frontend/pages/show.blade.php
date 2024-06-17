@extends('frontend.layouts')
@section('title')
{{ $page->title }}
@endsection
@section('content')
    <div class="container">
        <h1>{{ $page->title }}</h1>
        <div>
            {!! $page->description !!}
        </div>
    </div>
@endsection
