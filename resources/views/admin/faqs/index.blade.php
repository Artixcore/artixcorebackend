@extends('admin.master')

@section('content')
    <div class="container">
        <h1>FAQs</h1>
        <a href="{{ route('faqs.create') }}" class="btn btn-primary mb-3">Add FAQ</a>

        <div class="row">
            @foreach ($faqs as $faq)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $faq->title }}</h5>
                            <p class="card-text">{{ $faq->description }}</p>
                            <p class="card-text"><strong>Page:</strong> {{ $faq->page }}</p>
                            <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
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
