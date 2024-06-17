@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Website Settings</h1>
        <a href="{{ route('settings.create') }}" class="btn btn-primary mb-3">Add Setting</a>

        <div class="row">
            @foreach ($settings as $setting)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $setting->key }}</h5>
                            <p class="card-text">{{ $setting->value }}</p>
                            <a href="{{ route('settings.edit', $setting->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('settings.destroy', $setting->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
