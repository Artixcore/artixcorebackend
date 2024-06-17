<?php

namespace App\Http\Controllers;

use App\Models\IndexHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class IndexHeaderController extends Controller
{
    public function index()
    {
        $indexHeaders = IndexHeader::all();
        return view('admin.index_headers.index', compact('indexHeaders'));
    }

    public function create()
    {
        return view('admin.index_headers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,mp4,mov,avi',
            'status' => 'required|in:active,inactive',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_author' => 'nullable|string|max:255'
        ]);

        $data = $request->all();

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('public/media');
            $data['media'] = Storage::url($path);
        }

        IndexHeader::create($data);

        return redirect()->route('index_headers.index')->with('success', 'Header content created successfully.');
    }

    public function edit(IndexHeader $indexHeader)
    {
        return view('admin.index_headers.edit', compact('indexHeader'));
    }

    public function update(Request $request, IndexHeader $indexHeader)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'url' => 'nullable|url',
            'media' => 'nullable|file|mimes:jpeg,png,jpg,mp4,mov,avi',
            'status' => 'required|in:active,inactive',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'meta_keywords' => 'nullable|string|max:255',
            'meta_author' => 'nullable|string|max:255'
        ]);

        $data = $request->all();

        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('public/media');
            $data['media'] = Storage::url($path);
        }

        $indexHeader->update($data);

        return redirect()->route('index_headers.index')->with('success', 'Header content updated successfully.');
    }

    public function destroy(IndexHeader $indexHeader)
    {
        if ($indexHeader->media) {
            Storage::delete(str_replace('/storage/', 'public/', $indexHeader->media));
        }

        $indexHeader->delete();
        return redirect()->route('index_headers.index')->with('success', 'Header content deleted successfully.');
    }
}
