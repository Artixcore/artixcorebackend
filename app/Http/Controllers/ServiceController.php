<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|unique:services',
            'url' => 'required|url',
        ]);

        $imagePath = $request->file('image')->store('images', 'public');
        $iconPath = $request->file('icon')->store('icons', 'public');

        Service::create([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'image' => $imagePath,
            'icon' => $iconPath,
            'slug' => $request->slug,
            'url' => $request->url,
        ]);

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'slug' => 'required|unique:services,slug,' . $service->id,
            'url' => 'required|url',
        ]);

        $imagePath = $service->image;
        $iconPath = $service->icon;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('icon')) {
            $iconPath = $request->file('icon')->store('icons', 'public');
        }

        $service->update([
            'title' => $request->title,
            'short_desc' => $request->short_desc,
            'image' => $imagePath,
            'icon' => $iconPath,
            'slug' => $request->slug,
            'url' => $request->url,
        ]);

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        // Delete the associated image and icon files
        Storage::disk('public')->delete($service->image);
        Storage::disk('public')->delete($service->icon);

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service deleted successfully.');
    }
}
