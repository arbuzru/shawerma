<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('images.index', compact('images'));
    }

    public function create()
    {
        return view('images.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'imageable_id' => 'required|integer',
            'imageable_type' => 'required|string',
            'url' => 'required|url',
        ]);

        Image::create($validated);
        return redirect()->route('images.index')->with('success', 'Image uploaded successfully.');
    }

    public function show(Image $image)
    {
        return view('images.show', compact('image'));
    }

    public function edit(Image $image)
    {
        return view('images.edit', compact('image'));
    }

    public function update(Request $request, Image $image)
    {
        $validated = $request->validate([
            'url' => 'required|url',
        ]);

        $image->update($validated);
        return redirect()->route('images.index')->with('success', 'Image updated successfully.');
    }

    public function destroy(Image $image)
    {
        $image->delete();
        return redirect()->route('images.index')->with('success', 'Image deleted successfully.');
    }
}


