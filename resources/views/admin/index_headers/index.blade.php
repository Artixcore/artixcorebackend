@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Index Header Content</h1>
        <a href="{{ route('index_headers.create') }}" class="btn btn-primary mb-3">Add Header Content</a>

        <div class="row">
            @foreach ($indexHeaders as $header)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $header->title }}</h5>
                            <p class="card-text">{{ $header->description }}</p>
                            <p class="card-text"><strong>Status:</strong> {{ $header->status }}</p>
                            <a href="{{ $header->url }}" target="_blank">{{ $header->url }}</a>
                            @if($header->media)
                                @if($header->media)
                                    <img src="{{ $header->media }}" alt="{{ $header->title }}" class="img-fluid">
                                @else
                                    <video src="{{ $header->media }}" controls class="img-fluid"></video>
                                @endif
                            @endif
                            <p class="card-text"><strong>Meta Title:</strong> {{ $header->meta_title }}</p>
                            <p class="card-text"><strong>Meta Description:</strong> {{ $header->meta_description }}</p>
                            <p class="card-text"><strong>Meta Keywords:</strong> {{ $header->meta_keywords }}</p>
                            <p class="card-text"><strong>Meta Author:</strong> {{ $header->meta_author }}</p>
                            <a href="{{ route('index_headers.edit', $header->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('index_headers.destroy', $header->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
