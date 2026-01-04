<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::where('user_id',Auth::user()->id)->with('category', 'user')->get();
        $category = Category::all();
        $users = User::all();

        return view('components.pages.AdminArticle', [
            'title' => 'Articles',
            'articles' => $articles,
            'category' => $category,
            'users' => $users
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|unique:articles,title|max:60',
            'excerpt' => 'required|string|max:150',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:webp,jpg,jpeg|max:100',
            'category_id' => 'required|exists:categories,id',
            'published_at' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article = new Article();
        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->body = $request->body;
        $article->category_id = $request->category_id;
        $article->published_at = $request->published_at;
        $article->user_id = auth()->id();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/article', $filename);
            $article->image = $filename;  // Menyimpan nama file ke dalam model Article
        }

        $slug = Str::slug($article->title);
        $baseSlug = $slug;
        $i = 1;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }

        $article->slug = $slug;

        $article->save();

        return redirect()->back()->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $category = Category::all();
        return view('components.pages.ArticlesEdit', [
            'title' => 'Edit Article',
            'article' => $article,
            'category' => $category
        ]);
    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:60',
            'excerpt' => 'required|string|max:150',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:webp,jpg,jpeg|max:100',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $article->title = $request->title;
        $article->excerpt = $request->excerpt;
        $article->body = $request->body;
        $article->category_id = $request->category_id;
        $article->published_at = $request->published_at;

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($article->image) {
                Storage::delete('public/article/' . $article->image);
            }

            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/article', $filename);
            $article->image = $filename;
        }

        $slug = Str::slug($article->title);
        $baseSlug = $slug;
        $i = 1;

        while (Article::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }

        $article->slug = $slug;

        $article->save();

        return redirect()->back()->with('success', 'Article updated successfully.');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        // Hapus gambar jika ada
        if ($article->image) {
            $imagePath = 'public/article/' . $article->image;
            if (Storage::exists($imagePath)) {
                Storage::delete($imagePath);
            }
        }

        $article->delete();

        return redirect()->back()->with('success', 'Article deleted successfully.');
    }
}
