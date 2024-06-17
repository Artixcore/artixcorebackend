<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class FrontendMenuController extends Controller
{
    public function showHeaderMenu()
    {
        $menus = Menu::with('children')->whereNull('parent_id')->orderBy('order')->get();
        return view('layouts.header', compact('menus'));
    }
}
