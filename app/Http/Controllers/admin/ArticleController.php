<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category; // Tambahkan model Category
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->get('status', 'all'); // Default 'all'
        $articlesQuery = Article::query();

        if ($status === 'published') {
            $articlesQuery->where('status', 'published');
        } elseif ($status === 'draft') {
            $articlesQuery->where('status', 'draft');
        }

        // Dapatkan artikel sesuai status
        $articles = $articlesQuery->with('category')->latest()->paginate(10);

        return view('admin.articles.index', compact('articles', 'status'));
        
    }


    public function create()
    {
        $categories = Category::all(); // Ambil semua kategori
        return view('admin.articles.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:articles',
            'content' => 'required',
            'category_id' => 'required|exists:categories,id', // Validasi kategori
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


    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:articles,slug,' . $article->id, // Unik kecuali untuk artikel ini
            'content' => 'required',
            'category_id' => 'required|exists:categories,id', // Validasi kategori
            'status' => 'required|in:published,draft',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Update gambar jika ada
        if ($request->hasFile('image')) {
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $validated['image'] = $request->file('image')->store('articles', 'public');
        }

        // Perbarui artikel
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
        $article = Article::where('slug', $slug)->with('category')->firstOrFail();

        // Tambahkan logika untuk meningkatkan views
        $article->increment('views');

        return view('articles.show', compact('article'));
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all(); // Ambil semua kategori untuk dropdown

        return view('admin.articles.edit', compact('article', 'categories'));
    }


    public function preview($id)
    {
        $article = Article::with('category')->findOrFail($id);

        // Jika artikel sudah dipublikasikan, beri pesan peringatan
        $warningMessage = null;
        if ($article->status === 'published') {
            $warningMessage = "This article is published. You are previewing the published version.";
        }
        $article->content = strip_tags($article->content);
        return view('admin.articles.preview', compact('article', 'warningMessage'));
    }
}
