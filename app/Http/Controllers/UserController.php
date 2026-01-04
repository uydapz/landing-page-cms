<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return view('components.pages.AdminUser', [
            'title' => 'User',
            'user' => User::all()
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:12',
            'nama' => 'required|string|max:50',
            'password' => 'required|string|min:5',
            'foto' => 'required|image|mimes:webp,jpeg,jpg,png|max:100',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = new User();
        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/user', $filename);
            $user->foto = $filename;  // Menyimpan nama file ke dalam model User
        }

        $user->save();

        return redirect()->back()->with('success', 'User created successfully.');
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:12',
            'nama' => 'required|string|max:50',
            'password' => 'nullable|string|min:8', // Validasi password optional untuk update
            'foto' => 'nullable|image|mimes:webp,png,jpg,jpeg|max:100', // Validasi untuk file foto
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::findOrFail($id);
        $user->username = $request->username;
        $user->nama = $request->nama;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password); // Hash password sebelum menyimpan
        }

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($user->foto) {
                Storage::delete('public/user/' . $user->foto);
            }

            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/user', $filename);
            $user->foto = $filename;  // Menyimpan nama file ke dalam model User
        }

        $user->save();

        return redirect()->back()->with('success', 'User updated successfully.');
    }


    public function destroy($id)
    {
        $user = User::findOrFail($id);

        // Hapus foto jika ada
        if ($user->foto) {
            Storage::delete('public/user/' . $user->foto);
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully.');
    }

    public function author($id)
    {
        // Temukan pengguna berdasarkan ID
        $user = User::where('id', $id)->with('articles')->firstOrFail();

        // Ambil semua artikel yang ditulis oleh pengguna
        $count = Article::where('user_id', $user->id)->get();
        $articles = Article::where('user_id', $user->id)->paginate(1);

        // Kirim data ke view
        return view('components.pages.Author', [
            'title' => 'Author - ' . $user->username,
            'user' => $user,
            'articles' => $articles,
            'count' => $count,
        ]);
    }
}
