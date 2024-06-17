<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function index()
    {
        $uploads = Upload::all();
        return view('admin.uploads.index', compact('uploads'));
    }

    public function create()
    {
        return view('admin.uploads.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'video' => 'nullable|file|mimes:mp4,mov,avi',
            'url' => 'nullable|url',
            'meta_tag' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/uploads/images');
            $data['image'] = Storage::url($path);
        }

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('public/uploads/videos');
            $data['video'] = Storage::url($path);
        }

        $data['slug'] = \Str::slug($request->input('meta_title', 'upload-' . time()));

        Upload::create($data);

        return redirect()->route('uploads.index')->with('success', 'Upload created successfully.');
    }

    public function edit(Upload $upload)
    {
        return view('admin.uploads.edit', compact('upload'));
    }

    public function update(Request $request, Upload $upload)
    {
        $request->validate([
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'video' => 'nullable|file|mimes:mp4,mov,avi',
            'url' => 'nullable|url',
            'meta_tag' => 'nullable|string|max:255',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/uploads/images');
            $data['image'] = Storage::url($path);
        }

        if ($request->hasFile('video')) {
            $path = $request->file('video')->store('public/uploads/videos');
            $data['video'] = Storage::url($path);
        }

        $data['slug'] = \Str::slug($request->input('meta_title', 'upload-' . time()));

        $upload->update($data);

        return redirect()->route('uploads.index')->with('success', 'Upload updated successfully.');
    }
}
