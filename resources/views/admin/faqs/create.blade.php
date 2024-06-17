@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add FAQ</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('faqs.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="page">Page</label>
                            <input type="text" name="page" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add FAQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
