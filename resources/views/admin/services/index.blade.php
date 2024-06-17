@extends('admin.master')

@section('content')
    <h1>Services</h1>
    <a href="{{ route('services.create') }}" class="btn btn-primary">Create Service</a>
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Short Description</th>
                <th>Image</th>
                <th>Icon</th>
                <th>Slug</th>
                <th>URL</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->short_desc }}</td>
                    <td><img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" width="50"></td>
                    <td><img src="{{ asset('storage/' . $service->icon) }}" alt="{{ $service->title }}" width="50"></td>
                    <td>{{ $service->slug }}</td>
                    <td><a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a></td>
                    <td>
                        <a href="{{ route('services.show', $service->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
