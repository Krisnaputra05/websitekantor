<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        // Caching untuk performa
        $totalArticles = Cache::remember('total_articles', 3600, fn() => Article::count());
        $publishedArticles = Cache::remember('published_articles', 3600, fn() => Article::where('status', 'published')->count());
        $draftArticles = Cache::remember('draft_articles', 3600, fn() => Article::where('status', 'draft')->count());
        $totalViews = Cache::remember('total_views', 3600, fn() => Article::sum('views'));

        // Ambil data views per hari dengan batas waktu 30 hari terakhir
        $viewsData = Cache::remember('views_data', 3600, function () {
            return Article::selectRaw('DATE(created_at) as date, SUM(views) as views')
                ->where('created_at', '>=', now()->subDays(30)) // Batasi 30 hari terakhir
                ->groupBy('date')
                ->orderBy('date')
                ->get();
        });

        // Format data untuk dikirim ke view
        $viewsDataFormatted = [
            'dates' => $viewsData->pluck('date')->toArray(),
            'views' => $viewsData->pluck('views')->toArray(),
        ];

        // Kondisi modal (default disembunyikan)
        $isVisible = false;

        // Kirim semua data ke view
        return view('admin.dashboard', compact(
            'totalArticles',
            'publishedArticles',
            'draftArticles',
            'totalViews',
            'viewsDataFormatted',
            'isVisible'
        ));
    }
}
