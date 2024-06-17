@extends('admin.master')

@section('content')
    <div class="container">
        <h1>Edit Menu</h1>
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('menus.update', $menu->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $menu->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" value="{{ $menu->url }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control">{{ $menu->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Parent Menu</label>
                            <select name="parent_id" class="form-control">
                                <option value="">None</option>
                                @foreach ($menus as $parentMenu)
                                    <option value="{{ $parentMenu->id }}" {{ $parentMenu->id == $menu->parent_id ? 'selected' : '' }}>
                                        {{ $parentMenu->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="order">Order</label>
                            <input type="number" name="order" class="form-control" value="{{ $menu->order }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update Menu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
