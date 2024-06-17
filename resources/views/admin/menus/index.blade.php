@extends('admin.master')
@section('title')
    <title>Menu</title>
@endsection
@section('content')
    <div class="container">
        <h1>Menus</h1>
        <a href="{{ route('menus.create') }}" class="btn btn-primary mb-3">Add Menu</a>

        <div class="row">
            @foreach ($menus as $menu)
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="card-body">
                            <h5 class="card-title">{{ $menu->title }}</h5>
                            <p class="card-text">{{ $menu->description }}</p>
                            <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                            @if ($menu->children->count())
                                <ul class="mt-3">
                                    @foreach ($menu->children as $child)
                                        <li>
                                            {{ $child->title }}
                                            <a href="{{ route('menus.edit', $child->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                            <form action="{{ route('menus.destroy', $child->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
