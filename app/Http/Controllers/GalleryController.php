<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        return view('components.pages.AdminGallery', [
            'title' => 'Gallery',
            'gallery' => Gallery::all()
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'caption' => 'required|string|max:255',
            'image' => 'required|image|mimes:webp,jpg,jpeg|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $gallery = new Gallery();
        $gallery->caption = $request->caption;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/gallery', $filename);
            $gallery->image = $filename;  // Menyimpan nama file ke dalam model Gallery
        }

        $gallery->save();

        return redirect()->back()->with('success', 'Gallery created successfully.');
    }

    public function show()
    {
        // Temukan pengguna berdasarkan ID
        $gallery = Gallery::paginate(3);

        // Kirim data ke view
        return view('components.pages.Gallery', [
            'title' => 'Galeri',
            'gallery' => $gallery
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'caption' => 'string|max:255',
            'image' => 'nullable|image|mimes:webp,jpg,jpeg|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $gallery->caption = $request->caption;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($gallery->image) {
                Storage::disk('public')->delete('gallery/' . $gallery->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/gallery', $filename);
            $gallery->image = $filename;
        }

        $gallery->save();

        return redirect()->back()->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        try {
            if ($gallery->image) {
                $imagePath = 'gallery/' . $gallery->image;

                if (Storage::disk('public')->exists($imagePath)) {
                    Storage::disk('public')->delete($imagePath);
                }
            }

            $gallery->delete();

            return redirect()->back()->with('success', 'Gallery deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete gallery: ' . $e->getMessage());
        }
    }
}
