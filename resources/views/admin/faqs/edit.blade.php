@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit FAQ</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $faq->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" required>{{ $faq->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="page">Page</label>
                            <input type="text" name="page" class="form-control" value="{{ $faq->page }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
