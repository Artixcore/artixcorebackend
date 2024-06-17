@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Testimonials</h1>
        <a href="{{ route('testimonials.create') }}" class="btn btn-primary mb-3">Add Testimonial</a>

        <div class="row">
            @foreach ($testimonials as $testimonial)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $testimonial->first_name }} {{ $testimonial->last_name }}</h5>
                            <p class="card-text">{{ $testimonial->review }}</p>
                            <p class="card-text"><strong>Stars:</strong> {{ $testimonial->stars }}</p>
                            <p class="card-text"><strong>Source:</strong> {{ $testimonial->source }}</p>
                            <p class="card-text"><strong>LinkedIn ID:</strong> {{ $testimonial->linkedin_id }}</p>
                            <p class="card-text"><strong>Project Name:</strong> {{ $testimonial->project_name }}</p>
                            <p class="card-text"><strong>Project ID:</strong> {{ $testimonial->project_id }}</p>
                            <p class="card-text"><strong>Gender:</strong> {{ $testimonial->gender }}</p>
                            <p class="card-text"><strong>Country:</strong> {{ $testimonial->country }}</p>
                            <p class="card-text"><strong>State:</strong> {{ $testimonial->state }}</p>
                            <p class="card-text"><strong>City:</strong> {{ $testimonial->city }}</p>
                            @if ($testimonial->image)
                                <img src="{{ $testimonial->image }}" alt="{{ $testimonial->first_name }}" class="img-fluid">
                            @endif
                            <a href="{{ route('testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('testimonials.destroy', $testimonial->id) }}" method="POST" style="display:inline;">
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
