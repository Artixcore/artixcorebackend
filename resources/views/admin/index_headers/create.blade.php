@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Header Content</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('index_headers.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="media">Media (Image/Video)</label>
                            <input type="file" name="media" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="meta_author">Meta Author</label>
                            <input type="text" name="meta_author" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Add Header Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
