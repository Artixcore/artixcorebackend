<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        $menus = Menu::whereNull('parent_id')->get();
        return view('admin.menus.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'required|integer'
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu created successfully.');
    }

    public function edit(Menu $menu)
    {
        $menus = Menu::whereNull('parent_id')->get();
        return view('admin.menus.edit', compact('menu', 'menus'));
    }

    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:menus,id',
            'order' => 'required|integer'
        ]);

        $menu->update($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
