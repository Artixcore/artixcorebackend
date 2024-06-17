@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Upload</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('uploads.update', $upload->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                            @if($upload->image)
                                <small>Current file: {{ $upload->image }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="video">Video</label>
                            <input type="file" name="video" class="form-control">
                            @if($upload->video)
                                <small>Current file: {{ $upload->video }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control" value="{{ $upload->url }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_tag">Meta Tag</label>
                            <input type="text" name="meta_tag" class="form-control" value="{{ $upload->meta_tag }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ $upload->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ $upload->meta_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{ $upload->description }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
