<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

class ContactController extends Controller
{
    /**
     * Menampilkan halaman kontak dengan daftar artikel yang dipublikasikan dan fitur pencarian.
     */
    public function index(Request $request)
    {
        // Ambil semua kategori
        $categories = Category::all();

        // Ambil query pencarian dari request
        $search = $request->input('search');
        $categorySlug = $request->input('category');

        // Query artikel yang dipublikasikan
        $articles = Article::published()
            ->when($search, function ($query, $search) {
                return $query->where('title', 'like', "%{$search}%");
            })
            ->when($categorySlug, function ($query, $categorySlug) {
                return $query->whereHas('category', function ($query) use ($categorySlug) {
                    $query->where('slug', $categorySlug);
                });
            })
            ->latest()
            ->paginate(10);

        // Ambil 5 artikel terpopuler berdasarkan views
        $popularPosts = Article::published()
            ->orderBy('views', 'desc')
            ->take(10)
            ->get();

        return view('pages.contact', compact('categories', 'articles', 'popularPosts'));
    }

    /**
     * Menyimpan artikel baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published',
            'category_id' => 'required|exists:categories,id',
        ]);

        // Upload gambar jika ada
        $imagePath = $request->hasFile('image')
            ? $request->file('image')->store('articles', 'public')
            : null;

        // Buat artikel baru
        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'status' => $validated['status'],
            'category_id' => $validated['category_id'],
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Menampilkan artikel berdasarkan slug.
     */
    public function search(Request $request)
    {
        $query = Article::query();

        // Filter berdasarkan kategori jika dipilih
        if ($request->has('category') && $request->category) {
            $category = Category::where('slug', $request->category)->firstOrFail();
            $query->where('category_id', $category->id);
        }

        // Filter berdasarkan pencarian judul artikel
        if ($request->has('search') && $request->search) {
            $query->where('title', 'like', '%' . $request->search . '%');
        }

        // Dapatkan hasil artikel
        $articles = $query->latest()->paginate(10);

        // Ambil kategori untuk dropdown
        $categories = Category::all();

        return view('articles.index', compact('article', 'categories'));
    }
}
    