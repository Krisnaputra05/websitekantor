<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        $totalArticles = Article::count(); // Total artikel

        return view('admin.articles.index', compact('articles', 'totalArticles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles',
            'content' => 'required',
            'image' => 'nullable|image|max:2048',
            'status' => 'required|in:draft,published',
        ]);

        $validated['slug'] = Str::slug($validated['title']);

        // Simpan gambar jika ada
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        // Buat artikel
        Article::create($validated);

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article created successfully');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);

        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'status' => 'required|in:published,draft',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update gambar jika ada
        if ($request->hasFile('image')) {
            if ($article->image) {
                // Hapus gambar lama
                Storage::disk('public')->delete($article->image);
            }
            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        // Update artikel
        $article->update($validated);

        return redirect()->route('admin.articles.edit', $article->id)
            ->with('success', 'Article updated successfully!');
    }

    public function destroy(Article $article)
    {
        // Hapus gambar jika ada
        if ($article->image) {
            Storage::disk('public')->delete($article->image);
        }

        // Hapus artikel
        $article->delete();

        return redirect()->route('admin.articles.index')
            ->with('success', 'Article deleted successfully');
    }

    public function show($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail(); // Cari artikel berdasarkan slug.

        // Tambahkan logika untuk meningkatkan views
        $article->increment('views'); // Menambah jumlah view +1

        return view('articles.show', compact('article'));
    }
}
