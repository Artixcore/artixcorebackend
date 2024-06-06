<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Header;

class HomePageController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hometable = Header::all();
        return view('admin.home.index', compact('hometable'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $header = Header::latest()->first();
        return view('admin.home.create', compact('header'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Custom validation logic
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'desc' => 'required',
            'status' => 'required',
            'url' => 'required|url',
            'video' => 'nullable|file|mimetypes:video/mp4|max:50000',
            'image' => 'nullable|image|max:5000',
        ]);

        // Custom validation to check only one of video or image is uploaded
        $validator->sometimes(['video'], 'required_without:image', function ($input) {
            return !$input->image;
        });

        $validator->sometimes(['image'], 'required_without:video', function ($input) {
            return !$input->video;
        });

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $header = new Header();
            $header->number = "H" . uniqid();
            $header->title = $request->title;
            $header->desc = $request->desc;
            $header->status = $request->status;
            $header->url = $request->url;

            // Handle image upload with original file name
            if ($request->hasFile('image')) {
                $imageName = $request->image->getClientOriginalName(); // Get original file name
                $request->image->storeAs('public', $imageName); // Store with original file name in the public disk
                $header->image = $imageName;
            }

            // Handle video upload with original file name
            if ($request->hasFile('video')) {
                $videoName = $request->video->getClientOriginalName(); // Get original file name
                $request->video->storeAs('public', $videoName); // Store with original file name in the public disk
                $header->video = $videoName;
            }

            $header->save();

            return redirect()->back()->with('success', 'Header data has been stored successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error storing data: ' . $e->getMessage());
        }
    }

    private function sanitizeFilename($filename)
    {
        $sanitized = preg_replace('/[^\w\.\-]/', '_', $filename);
        return $sanitized;
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
