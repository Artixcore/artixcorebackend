@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $upload->meta_title }}</h1>
        <div>
            {!! $upload->description !!}
        </div>
        <p><strong>URL:</strong> {{ $upload->url }}</p>
        <p><strong>Meta Tag:</strong> {{ $upload->meta_tag }}</p>
        <p><strong>Meta Description:</strong> {{ $upload->meta_description }}</p>
        @if ($upload->image)
            <img src="{{ $upload->image }}" alt="{{ $upload->meta_title }}" class="img-fluid">
        @endif
        @if ($upload->video)
            <video src="{{ $upload->video }}" controls class="img-fluid"></video>
        @endif
    </div>
@endsection
