<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.service.index', compact('services'));
    }
    // Show create form
    public function create()
    {
        return view('admin.service.create');
    }

    // Store a new service
    public function store(Request $request)
    {
        $request->validate([
            'tag' => 'required',
            'title' => 'required',
            'desc' => 'required',
            'url' => 'required|url',
            'image' => 'nullable|image',
            'video' => 'nullable'
        ]);

        $service = new Service([
            'number' => "S" . uniqid(),
            'tag' => $request->tag,
            'title' => $request->title,
            'desc' => $request->desc,
            'url' => $request->url,
            'image' => $request->file('image') ? $request->file('image')->store('services', 'public') : null,
            'video' => $request->video,
        ]);

        $service->save();

        return redirect()->route('service.index')->with('success', 'Service created successfully.');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id); // Ensures the service is found or returns a 404 error
        return view('admin.service.view', compact('service'));
    }

    public function destroy($id)
{
    $service = Service::findOrFail($id);
    if ($service->image) {
        Storage::delete($service->image);
    }
    $service->delete();

    return redirect()->route('service.index')->with('success', 'Service has been deleted successfully.');
}
}
