@extends('admin.master')

@section('content')
    <h1>{{ $service->title }}</h1>
    <p>{{ $service->short_desc }}</p>
    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
    <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}">
    <p>Slug: {{ $service->slug }}</p>
    <p>URL: <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a></p>
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Back</a>
@endsection
