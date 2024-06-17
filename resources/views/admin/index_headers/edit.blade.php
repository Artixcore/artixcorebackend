@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Header Content</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('index_headers.update', $indexHeader->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $indexHeader->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{ $indexHeader->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control" value="{{ $indexHeader->url }}">
                        </div>
                        <div class="form-group">
                            <label for="media">Media (Image/Video)</label>
                            <input type="file" name="media" class="form-control">
                            @if($indexHeader->media)
                                <small>Current file: {{ $indexHeader->media }}</small>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" required>
                                <option value="active" {{ $indexHeader->status == 'active' ? 'selected' : '' }}>Active</option>
                                <option value="inactive" {{ $indexHeader->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="meta_title">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" value="{{ $indexHeader->meta_title }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta Description</label>
                            <textarea name="meta_description" class="form-control">{{ $indexHeader->meta_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="meta_keywords">Meta Keywords</label>
                            <input type="text" name="meta_keywords" class="form-control" value="{{ $indexHeader->meta_keywords }}">
                        </div>
                        <div class="form-group">
                            <label for="meta_author">Meta Author</label>
                            <input type="text" name="meta_author" class="form-control" value="{{ $indexHeader->meta_author }}">
                        </div>
                        <button type="submit" class="btn btn-success">Update Header Content</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
