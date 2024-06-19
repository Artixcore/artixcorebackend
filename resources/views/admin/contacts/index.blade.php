@extends('admin.master')
@section('title')
Contact Messages
@endsection
@section('content')
    <div class="container">
        {{-- <h1></h1> --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($contact->message, 50) }}</td>
                        <td>{{ $contact->is_read ? 'Read' : 'Unread' }}</td>
                        <td>
                            <a href="{{ route('admin.contacts.show', $contact->id) }}" class="btn btn-sm btn-primary">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
