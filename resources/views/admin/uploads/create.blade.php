@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Upload</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" name="video" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="meta_tag">Meta Tag</label>
                            <input type="text" name="meta_tag" class="form-control">
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
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Add Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
