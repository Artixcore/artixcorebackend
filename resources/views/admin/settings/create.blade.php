@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Setting</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('settings.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" name="key" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <textarea name="value" class="form-control"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Add Setting</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
