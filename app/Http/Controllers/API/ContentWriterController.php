<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContentWriter;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContentWriterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contentWriters = ContentWriter::all();
        return response()->json($contentWriters);
    }

    /**
     * Store a newly created resource in storage.
     * Validate the request and create a new content writer in the database.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:content_writers',
            'password' => 'required|string|min:6',
            'bio' => 'sometimes|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $contentWriter = ContentWriter::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password'),
            'bio' => $request->email,
        ]);

        return response()->json($contentWriter, 201);
    }

    /**
     * Display the specified resource.
     * Show details of a specific content writer.
     */
    public function show($id)
    {
        $contentWriter = ContentWriter::find($id);
        if (!$contentWriter) {
            return response()->json(['message' => 'Content Writer not found'], 404);
        }

        return response()->json($contentWriter);
    }

    /**
     * Update the specified resource in storage.
     * Validate the request and update the specified content writer.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:content_writers,email,' . $id,
            'password' => 'sometimes|required|string|min:6',
            'bio' => 'nullable|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $contentWriter = ContentWriter::find($id);
        if (!$contentWriter) {
            return response()->json(['message' => 'Content Writer not found'], 404);
        }

        $contentWriter->update([
            'name' => $request->input('name', $contentWriter->name),
            'email' => $request->input('email', $contentWriter->email),
            'password' => $request->filled('password') ? Hash::make($request->password) : $contentWriter->password,
            'bio' => $request->input('bio', $contentWriter->bio)
        ]);

        return response()->json($contentWriter);
    }

    /**
     * Remove the specified resource from storage.
     * Delete the specified content writer from the database.
     */
    public function destroy($id)
    {
        $contentWriter = ContentWriter::find($id);
        if (!$contentWriter) {
            return response()->json(['message' => 'Content Writer not found'], 404);
        }

        $contentWriter->delete();
        return response()->json(['message' => 'Content Writer deleted successfully']);
    }
}
