@extends('admin.master')

@section('content')
    <div class="container">
        <h1>FAQs</h1>
        <a href="{{ route('faqs.create') }}" class="btn btn-primary mb-3">Add FAQ</a>

        <div class="row">
            <div class="col-12">
                <table id="faqsTable" class="display">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Page</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $faq)
                            <tr>
                                <td>{{ $faq->title }}</td>
                                <td>{{ $faq->description }}</td>
                                <td>{{ $faq->page }}</td>
                                <td>
                                    <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('#faqsTable').DataTable();
        });
    </script>
@endsection
