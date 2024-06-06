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
                            <table id="basicExample" class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Company Name</th>
                                        <th>URL</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($workwiths as $workwith)
                                        <tr>
                                            <td>{{ $workwith->number }}</td>
                                            <td>{{ $workwith->company_name }}</td>
                                            <td>{{ $workwith->url }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('workwith.destroy', $workwith->id) }}" onsubmit="return confirmDelete()">
                                                    @csrf
                                                    <button type="submit" class="btn btn-outline-danger"><i class="bi bi-x-lg"></i></button>
                                                </form>
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

                <form action="{{ route('workwith.store') }}" method="POST" enctype="multipart/form-data"
                    class="p-4 shadow rounded-lg bg-white">
                    @csrf

                    <div class="mb-3">
                        <label for="title">Company Name</label>
                        <input type="text" class="form-control" id="company_name" name="company_name"
                            placeholder="Enter Company Name">
                    </div>

                    <div class="mb-3">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url" name="url" placeholder="http://">
                    </div>

                    <div class="mb-3">
                        <label for="image">Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>

            </div>
        </div>
    </div>


@endsection
@section('footer_js')
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this record?');
    }
</script>
@endsection

