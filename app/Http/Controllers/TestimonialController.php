<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'source' => 'nullable|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'review' => 'required|string',
            'stars' => 'required|integer|min:0|max:5',
            'linkedin_id' => 'nullable|string|max:255',
            'project_name' => 'nullable|string|max:255',
            'project_id' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/testimonials/images');
            $data['image'] = Storage::url($path);
        }

        Testimonial::create($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'source' => 'nullable|string|max:255',
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'review' => 'required|string',
            'stars' => 'required|integer|min:0|max:5',
            'linkedin_id' => 'nullable|string|max:255',
            'project_name' => 'nullable|string|max:255',
            'project_id' => 'nullable|string|max:255',
            'gender' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/testimonials/images');
            $data['image'] = Storage::url($path);
        }

        $testimonial->update($data);

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::delete(str_replace('/storage/', 'public/', $testimonial->image));
        }

        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully.');
    }
}
