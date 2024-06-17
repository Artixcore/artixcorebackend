@extends('admin.master')

@section('content')
    <h1>Edit Service</h1>
    <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $service->title }}" required>
        </div>
        <div class="form-group">
            <label for="short_desc">Short Description</label>
            <textarea name="short_desc" id="short_desc" class="form-control" required>{{ $service->short_desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="image" id="image" class="form-control-file">
            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="100">
        </div>
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="file" name="icon" id="icon" class="form-control-file">
            <img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" width="50">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" class="form-control" value="{{ $service->slug }}" required>
        </div>
        <div class="form-group">
            <label for="url">URL</label>
            <input type="url" name="url" id="url" class="form-control" value="{{ $service->url }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
