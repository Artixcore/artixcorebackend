@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Uploads</h1>
        <a href="{{ route('uploads.create') }}" class="btn btn-primary mb-3">Add Upload</a>

        <div class="row">
            @foreach ($uploads as $upload)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $upload->meta_title }}</h5>
                            <p class="card-text">{{ $upload->description }}</p>
                            <p class="card-text"><strong>URL:</strong> {{ $upload->url }}</p>
                            <p class="card-text"><strong>Meta Tag:</strong> {{ $upload->meta_tag }}</p>
                            <p class="card-text"><strong>Meta Description:</strong> {{ $upload->meta_description }}</p>
                            @if ($upload->image)
                                <img src="{{ $upload->image }}" alt="{{ $upload->meta_title }}" class="img-fluid">
                            @endif
                            @if ($upload->video)
                                <video src="{{ $upload->video }}" controls class="img-fluid"></video>
                            @endif
                            <a href="{{ route('uploads.show', $upload->slug) }}" class="btn btn-sm btn-info">View</a>
                            <a href="{{ route('uploads.edit', $upload->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('uploads.destroy', $upload->id) }}" method="POST" style="display:inline;">
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
