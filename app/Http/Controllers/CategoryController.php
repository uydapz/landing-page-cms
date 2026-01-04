<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        return view('components.pages.AdminCategory', [
            'title' => 'Category',
            'category' => Category::all() // Menggunakan all() untuk mengambil semua data
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['name']); // Ambil hanya field name
        $data['slug'] = Str::slug($data['name']); // Tambahkan slug

        Category::create($data);

        return redirect()->back()->with('success', 'Category created successfully.');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'string|max:255|unique:categories,name',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['name']); // Ambil hanya field name
        $data['slug'] = Str::slug($data['name']); // Tambahkan slug

        $category->update($data);

        return redirect()->back()->with('success', 'Category updated successfully.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Hapus data Category
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
