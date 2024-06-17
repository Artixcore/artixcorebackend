@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Social Link</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('social_links.update', $socialLink->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $socialLink->name }}" required>
                        </div>
                        <div class="form-group">
                            <label for="icon">Icon (URL)</label>
                            <input type="text" name="icon" class="form-control" value="{{ $socialLink->icon }}" required>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="url" name="url" class="form-control" value="{{ $socialLink->url }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update Social Link</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
