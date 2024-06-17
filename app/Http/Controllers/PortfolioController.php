<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    public function create()
    {
        return view('admin.portfolios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'done_by' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'project_type' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/portfolios/images');
            $data['image'] = Storage::url($path);
        }

        Portfolio::create($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio item created successfully.');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'image' => 'nullable|file|mimes:jpeg,png,jpg',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'done_by' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'project_type' => 'nullable|string|max:255',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/portfolios/images');
            $data['image'] = Storage::url($path);
        }

        $portfolio->update($data);

        return redirect()->route('portfolios.index')->with('success', 'Portfolio item updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete(str_replace('/storage/', 'public/', $portfolio->image));
        }

        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('success', 'Portfolio item deleted successfully.');
    }
}
