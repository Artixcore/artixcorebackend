@extends('admin.master')
@section('content')
<div class="container">
    <h2>Service Details</h2>
    <div class="card">
        <div class="card-body">
            <h3 class="card-title">{{ $service->title }}</h3>
            <p class="card-text"><strong>Number:</strong> {{ $service->number }}</p>
            <p class="card-text"><strong>Tag:</strong> {{ $service->tag }}</p>
            <p class="card-text"><strong>Description:</strong> {{ $service->desc }}</p>
            <p class="card-text"><strong>URL:</strong> <a href="{{ $service->url }}" target="_blank">{{ $service->url }}</a></p>
            @if($service->image)
                <p class="card-text"><strong>Image:</strong></p>
                <img src="{{ Storage::url($service->image) }}" alt="Service Image" style="width: 100px;">
            @endif
            @if($service->video)
                <p class="card-text"><strong>Video URL:</strong> <a href="{{ $service->video }}" target="_blank">{{ $service->video }}</a></p>
            @endif

        </div>
        <div class="card-footer">
            <form action="{{ route('service.destroy', $service->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this service?')">Delete Service</button>
            </form>
        </div>
    </div>
</div>
@endsection
