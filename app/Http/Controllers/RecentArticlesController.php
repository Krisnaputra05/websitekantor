<?php

namespace App\Http\Controllers;

use App\Models\Article;

class RecentArticlesController extends Controller
{
    /**
     * Menampilkan artikel terbaru.
     */
    public function index()
    {
        // Ambil 5 artikel terbaru berdasarkan waktu pembuatan
        $articles = Article::latest('created_at')->with('category')->take(5)->get();

        // Kirim data ke view
        return view('articles.recent', compact('articles'));
    }
}
