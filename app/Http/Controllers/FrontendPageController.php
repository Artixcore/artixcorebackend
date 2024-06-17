<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Upload;
use Illuminate\Http\Request;

class FrontendPageController extends Controller
{
    public function show($slug)
    {
        $page = Page::where('slug', $slug)->where('status', 'active')->firstOrFail();
        return view('frontend.pages.show', compact('page'));
    }

    public function showUploads()
    {
        $uploads = Upload::whereNotNull('image')->orWhereNotNull('video')->get();
        return view('frontend.Home.About', compact('uploads'));
    }
}
