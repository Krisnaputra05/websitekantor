<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        // Statistik artikel untuk admin
        $totalArticles = Article::count();
        $publishedArticles = Article::published()->count();
        $draftArticles = Article::draft()->count();
        $totalViews = Article::published()->sum('views'); // Hanya hitung views artikel yang published

        return view('admin.dashboard', compact('totalArticles', 'publishedArticles', 'draftArticles', 'totalViews'));
    }
}
