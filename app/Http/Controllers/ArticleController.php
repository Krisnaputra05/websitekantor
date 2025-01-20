<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ArticleController extends Controller
{
    /**
     * Menampilkan halaman utama dengan daftar artikel dan kategori.
     */
    public function index()
    {
        // Ambil semua kategori
        $categories = Category::all();
        $featured_articles = Article::published()->where('is_featured', true)->take(3)->get();
        $latest_articles = Article::published()->latest()->take(6)->get();
        $popular_articles = Article::published()->orderBy('views', 'desc')->take(5)->get();
    
        return view('pages.contact', compact('categories', 'featured_articles', 'latest_articles', 'popular_articles'));
    }

    /**
     * Menampilkan artikel berdasarkan kategori.
     */
    public function category($slug)
    {
        // Cari kategori berdasarkan slug
        $category = Category::where('slug', $slug)->firstOrFail();

        // Ambil artikel yang terkait dengan kategori
        $articles = $category->articles()->published()->paginate(10);

        return view('articles.category', compact('category', 'articles'));
    }

    /**
     * Menampilkan artikel berdasarkan pencarian.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');

        // Cari artikel berdasarkan judul atau konten
        $articles = Article::published()
            ->where('title', 'like', "%{$query}%")
            ->orWhere('content', 'like', "%{$query}%")
            ->paginate(10);

        return view('articles.search', compact('query', 'articles'));
    }

    /**
     * Menampilkan artikel berdasarkan slug.
     */
    public function show($slug)
    {
        // Cari artikel berdasarkan slug
        $article = Article::where('slug', $slug)->firstOrFail();

        // Tambahkan jumlah views pada artikel
        $article->increment('views');

        // Ambil artikel populer untuk sidebar
        $popularPosts = Article::published()
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        return view('articles.show', compact('article', 'popularPosts'));
    }
}
