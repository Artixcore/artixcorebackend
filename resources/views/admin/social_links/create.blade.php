@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Social Link</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('social_links.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon (URL)</label>
                            <input type="text" name="icon" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-success">Add Social Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
