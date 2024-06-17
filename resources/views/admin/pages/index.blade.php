@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Pages</h1>
        <a href="{{ route('pages.create') }}" class="btn btn-primary mb-3">Add Page</a>

        <div class="row">
            @foreach ($pages as $page)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $page->title }}</h5>
                            <p class="card-text">{{ $page->description }}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $page->status }}</p>
                            <p class="card-text"><strong>Slug:</strong> {{ $page->slug }}</p>
                            <a href="{{ route('pages.edit', $page->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
