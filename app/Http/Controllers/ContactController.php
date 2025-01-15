<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Import model Article

class ContactController extends Controller
{
    /**
     * Menampilkan halaman kontak dengan daftar artikel yang dipublikasikan.
     */
    public function index()
    {
        // Data kontak dummy
        $contact = [
        ];

        // Query artikel dengan status "published"
        $articles = Article::published()->latest()->paginate(10);
        return view('pages.contact', compact('contact', 'articles'));

        $popularPosts = Article::published() // Gunakan scope published
            ->orderBy('views', 'desc')
            ->take(5) // Misalnya, ambil 5 artikel terpopuler
            ->get();

        return view('home', compact('popularPosts'));
    }

    /**
     * Menyimpan artikel baru.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string', // Validasi konten artikel
            'image' => 'nullable|image|max:2048', // Validasi gambar
            'status' => 'required|in:draft,published', // Status wajib: draft/published
        ]);

        // Upload gambar jika ada
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('articles', 'public'); // Simpan di storage
        }

        // Buat artikel baru
        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'image' => $imagePath,
            'status' => $validated['status'],
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Article created successfully!');
    }

    /**
     * Menampilkan artikel berdasarkan ID.
     */
    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        // Ambil artikel populer berdasarkan views
        $popularPosts = Article::published() // Tambahkan filter published
            ->orderBy('views', 'desc')
            ->limit(5)
            ->get();

        // Tambahkan jumlah views pada artikel yang ditampilkan
        $article->increment('views');

        return view('articles.show', compact('article', 'popularPosts'));
    }
}
