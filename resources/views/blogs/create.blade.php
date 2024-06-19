@extends('admin.master')
@section('title')
    Add Blog
@endsection
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <textarea name="description" class="tinymce" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="date">Date</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="author">Author</label>
                                <input type="text" name="author" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="meta_description">Meta Description</label>
                                <textarea name="meta_description" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="meta_keywords">Meta Keywords</label>
                                <textarea name="meta_keywords" class="form-control"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="video">Video</label>
                                <input type="file" name="video" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-success">Add Blog</button>
                        </div>

                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
    <!-- TinyMCE -->
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> --}}
    {{-- <script>
        tinymce.init({
            selector: 'textarea.tinymce',
            plugins: 'image media link code',
            toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | image media link code',

        });
    </script> --}}
@endsection
