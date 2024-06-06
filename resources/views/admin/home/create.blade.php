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

                @if ($header)
                    <div class="card p-4 shadow rounded-lg bg-white">
                        <div class="card-body">
                            <h5 class="card-title">{{ $header->title }}</h5>
                            <p class="card-text">{{ $header->desc }}</p>
                            <p class="text-muted">{{ $header->status }}</p>
                            <a href="{{ $header->url }}" target="_blank">Visit URL</a>

                            @if ($header->image)
                                <div>
                                    <img src="{{ asset('storage') }}/{{ $header->image }}" alt="Uploaded Image"
                                        style="width: 700px; height: 500px;">
                                </div>
                            @endif

                            @if ($header->video)
                                <div>
                                    <video width="700px" height="500px" controls>
                                        <source src="{{ asset('storage') }}/{{ $header->video }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            @endif
                        </div>
                    @else
                        <p>No header data found.</p>
                @endif
            </div>
        </div>
        <div class="col-md-4">
            <form action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data"
                class="p-4 shadow rounded-lg bg-white">
                @csrf

                <div class="mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                </div>

                <div class="mb-3">
                    <label for="desc">Description</label>
                    <textarea class="form-control" id="desc" name="desc" placeholder="Describe your entry" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Enter status">
                </div>

                <div class="mb-3">
                    <label for="url">URL</label>
                    <input type="text" class="form-control" id="url" name="url" placeholder="http://">
                </div>

                <div class="mb-3">
                    <label for="video">Video URL</label>
                    <input type="file" class="form-control" id="video" name="video" accept="video/*">
                </div>

                <div class="mb-3">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*">
                </div>

                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </form>

        </div>
    </div>
    </div>
@endsection

@section('footer_js')
    <script>
        function checkFileUpload(currentInput, otherInputId) {
            var otherInput = document.getElementById(otherinputId);
            if (currentInput.files.length > 0) {
                // If a file is chosen in the current input, disable the other input
                otherInput.disabled = true;
            } else {
                // If no file is chosen (e.g., user clears the input), enable the other input
                otherInput.disabled = false;
            }
        }
    </script>
@endsection
