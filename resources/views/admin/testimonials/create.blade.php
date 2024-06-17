@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Add Testimonial</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="source">Source</label>
                            <input type="text" name="source" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="review">Review</label>
                            <textarea name="review" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="stars">Stars</label>
                            <input type="number" name="stars" class="form-control" min="0" max="5" required>
                        </div>
                        <div class="form-group">
                            <label for="linkedin_id">LinkedIn ID</label>
                            <input type="text" name="linkedin_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="project_name">Project Name</label>
                            <input type="text" name="project_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="project_id">Project ID</label>
                            <input type="text" name="project_id" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <input type="text" name="gender" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Add Testimonial</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
