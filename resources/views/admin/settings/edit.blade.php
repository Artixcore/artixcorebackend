@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Setting</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('settings.update', $setting->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" name="key" class="form-control" value="{{ $setting->key }}" required>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <textarea name="value" class="form-control">{{ $setting->value }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update Setting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
