<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;

class DashboardController extends Controller
{
    public function index()
    {
        $totalArticles = Article::count();
        $publishedArticles = Article::where('status', 'published')->count();
        $draftArticles = Article::where('status', 'draft')->count();
        $totalViews = Article::sum('views'); // Total views dari semua artikel

        return view('admin.dashboard', compact('totalArticles', 'publishedArticles', 'draftArticles', 'totalViews'));
    }
}

