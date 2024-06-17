<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::all();
        return view('admin.social_links.index', compact('socialLinks'));
    }

    public function create()
    {
        return view('admin.social_links.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
            'url' => 'required|url'
        ]);

        SocialLink::create($request->all());

        return redirect()->route('social_links.index')->with('success', 'Social link created successfully.');
    }

    public function edit(SocialLink $socialLink)
    {
        return view('admin.social_links.edit', compact('socialLink'));
    }

    public function update(Request $request, SocialLink $socialLink)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'required|string',
            'url' => 'required|url'
        ]);

        $socialLink->update($request->all());

        return redirect()->route('social_links.index')->with('success', 'Social link updated successfully.');
    }

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();
        return redirect()->route('social_links.index')->with('success', 'Social link deleted successfully.');
    }
}
