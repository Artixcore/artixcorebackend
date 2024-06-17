@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Social Links</h1>
        <a href="{{ route('social_links.create') }}" class="btn btn-primary mb-3">Add Social Link</a>

        <div class="row">
            @foreach ($socialLinks as $link)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $link->name }}</h5>
                            <p class="card-text">
                                <img src="{{ $link->icon }}" alt="{{ $link->name }}" style="width: 30px; height: 30px;">
                                <a href="{{ $link->url }}" target="_blank">{{ $link->url }}</a>
                            </p>
                            <a href="{{ route('social_links.edit', $link->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('social_links.destroy', $link->id) }}" method="POST" style="display:inline;">
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
