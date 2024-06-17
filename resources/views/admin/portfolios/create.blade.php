@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Portfolio</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('portfolios.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="done_by">Done By</label>
                            <input type="text" name="done_by" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="project_type">Project Type</label>
                            <input type="text" name="project_type" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Add Portfolio</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
