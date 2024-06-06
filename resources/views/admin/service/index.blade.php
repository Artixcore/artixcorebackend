@extends('admin.master')
@section('content')
    <div class="container">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col-md-8">
                <div class="card p-4 shadow rounded-lg bg-white">
                    <div class="card-header">
                        <div class="card-title">List of Company We Work with</div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="servicesTable">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Tag</th>
                                        <th>Title</th>

                                        <th>URL</th>

                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                        <tr>
                                            <td>{{ $service->number }}</td>
                                            <td>{{ $service->tag }}</td>
                                            <td>{{ $service->title }}</td>

                                            <td>{{ $service->url }}</td>

                                            <td>
                                                <a href="{{ route('service.show', $service->id) }}"
                                                    class="btn btn-outline-info">View</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>



                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data"
                    class="p-4 shadow rounded-lg bg-white">
                    @csrf
                    <div class="mb-3">
                        <label for="tag" class="form-label">Tag</label>
                        <input type="text" class="form-control" id="tag" name="tag"
                            placeholder="Tag for the Service" required>
                    </div>

                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Title of the Service" required>
                    </div>

                    <div class="mb-3">
                        <label for="desc" class="form-label">Description</label>
                        <textarea class="form-control" id="desc" name="desc" placeholder="Detailed Description of the Service" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">URL</label>
                        <input type="text" class="form-control" id="url" name="url"
                            placeholder="http://example.com" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <label for="video" class="form-label">Video URL</label>
                        <input type="text" class="form-control" id="video" name="video"
                            placeholder="Video URL (optional)">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Create Service</button>
                </form>

            </div>
        </div>
    </div>


@endsection
@section('footer_js')
    <script>
        $(document).ready(function() {
            $('#servicesTable').DataTable();
        });
    </script>
@endsection
