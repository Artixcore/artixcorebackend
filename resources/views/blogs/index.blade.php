@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Blogs</h1>
        <a href="{{ route('blogs.create') }}" class="btn btn-primary mb-3">Add Blog</a>

        <div class="row">
            <div class="col-12">
                <table id="blogsTable" class="display">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th>Author</th>
                            <th>Meta Title</th>
                            <th>Meta Description</th>
                            <th>Meta Keywords</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $blog->title }}</td>
                                <td>{{ $blog->description }}</td>
                                <td>{{ $blog->date }}</td>
                                <td>{{ $blog->author }}</td>
                                <td>{{ $blog->meta_title }}</td>
                                <td>{{ $blog->meta_description }}</td>
                                <td>{{ $blog->meta_keywords }}</td>
                                <td>
                                    <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
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
            $('#blogsTable').DataTable();
        });
    </script>
@endsection
