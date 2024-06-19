@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Contact Message</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">From: {{ $contact->name }} ({{ $contact->email }})</h5>
                <h6 class="card-subtitle mb-2 text-muted">Subject: {{ $contact->subject }}</h6>
                <p class="card-text">{{ $contact->message }}</p>
                <p class="card-text"><small class="text-muted">Received on {{ $contact->created_at }}</small></p>
                <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary">Back to Messages</a>
            </div>
        </div>
    </div>
@endsection
