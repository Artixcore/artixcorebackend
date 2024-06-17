@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Portfolios</h1>
        <a href="{{ route('portfolios.create') }}" class="btn btn-primary mb-3">Add Portfolio</a>

        <div class="row">
            @foreach ($portfolios as $portfolio)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $portfolio->title }}</h5>
                            <p class="card-text">{{ $portfolio->description }}</p>
                            <p class="card-text"><strong>Done By:</strong> {{ $portfolio->done_by }}</p>
                            <p class="card-text"><strong>Date:</strong> {{ $portfolio->date }}</p>
                            <p class="card-text"><strong>Project Type:</strong> {{ $portfolio->project_type }}</p>
                            @if ($portfolio->image)
                                <img src="{{ $portfolio->image }}" alt="{{ $portfolio->title }}" class="img-fluid">
                            @endif
                            <a href="{{ route('portfolios.edit', $portfolio->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
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
