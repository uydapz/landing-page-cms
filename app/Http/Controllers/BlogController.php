<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article = Article::latest()->paginate(3);

        return view('components.pages.Blog', [
            'title' => 'Blogspot',
            'blog'  => $article
        ]);
    }

    public function show($slug)
    {

        $blog = Article::where('slug', $slug)->with('category', 'user')->firstOrFail();

        $previous = Article::where('id', '<', $blog->id)
            ->orderBy('id', 'desc')
            ->first();

        // Mengambil artikel berikutnya
        $next = Article::where('id', '>', $blog->id)
            ->orderBy('id', 'asc')
            ->first();

        $recentPosts = Article::orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('components.pages.BlogDetail', [
            'title' => 'Artikel - ' . $blog->title,
            'blog' => $blog,
            'previous' => $previous,
            'next' => $next,
            'recentPosts' => $recentPosts
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $results = Article::where('title', 'like', "%{$query}%")
            ->orWhere('body', 'like', "%{$query}%")
            ->paginate(10);

        // Pastikan untuk mengirimkan variabel 'title' ke view
        return view('components.pages.Result', [
            'title' => 'Search Results', // Contoh judul yang bisa diubah sesuai kebutuhan
            'query' => $query,
            'results' => $results,
        ]);
    }

    public function category($slug)
    {
        // Temukan kategori berdasarkan slug
        $category = Category::where('slug', $slug)->with('articles')->firstOrFail();

        // Ambil artikel-artikel yang terkait dengan kategori ini
        $articles = Article::where('category_id', $category->id)->paginate(10);

        // Kirim data ke view
        return view('components.pages.Category', [
            'category' => $category,
            'articles' => $articles,
        ]);
    }
}
