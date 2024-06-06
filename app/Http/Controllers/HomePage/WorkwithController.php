<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Workwith;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WorkwithController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workwiths = Workwith::paginate(10);
        return view('admin.workwith.index', compact('workwiths'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Custom validation logic
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'url' => 'required|url',
            'logo' => 'nullable|image|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $header = new Workwith();
            $header->number = "W" . uniqid();
            $header->company_name = $request->company_name;
            $header->url = $request->url;

            // Handle image upload with original file name
            if ($request->hasFile('logo')) {
                $imageName = $request->logo->getClientOriginalName(); // Get original file name
                $request->logo->storeAs('public', $imageName); // Store with original file name in the public disk
                $header->logo = $imageName;
            }

            $header->save();

            return redirect()->back()->with('success', 'Workwith data has been stored successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error storing data: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $header = Workwith::findOrFail($id);
        if ($header) {
            $header->delete();
            return redirect()->back()->with('success', 'Record deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }

}
