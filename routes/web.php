<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Contact;
use PhpParser\Node\Expr\AssignOp\Concat;
use App\Models\Category;
use App\Models\Article;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Route::get('/articles/{id}', [ContactController::class, 'show'])->name('article.show');

// Rute untuk halaman kontak
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::get('/articles/search', [ArticleController::class, 'search'])->name('articles.search');

// Perbaiki rute untuk menampilkan artikel berdasarkan slug
// Route::get('/article/{slug}', [ContactController::class, 'show'])->name('articles.show');


// Rute untuk menyimpan artikel baru (biasanya untuk admin)
Route::post('/admin/articles', [ContactController::class, 'store'])->name('admin.articles.store');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Admin Auth Routes
    Route::middleware('guest')->group(function () {
        Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    });

    Route::post('/logout', [LoginController::class, 'logout'])
        ->name('logout')
        ->middleware('auth');

    // Tambahkan rute preview di dalam grup yang tepat

    // Protected Admin Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/articles/{id}/preview', [AdminArticleController::class, 'preview'])
            ->name('articles.preview');
        Route::get('/admin/articles', [ArticleController::class, 'index'])->name('admin.articles.index');

        // Articles Management
        Route::controller(AdminArticleController::class)->group(function () {
            Route::get('/articles', 'index')->name('articles.index');
            Route::get('/articles/create', 'create')->name('articles.create');
            Route::post('/articles', 'store')->name('articles.store');
            Route::get('/articles/{article}/edit', 'edit')->name('articles.edit');
            Route::put('/articles/{article}', 'update')->name('articles.update');
            Route::delete('/articles/{article}', 'destroy')->name('articles.destroy');
        });
    });
});


// Route::get('/category/{category:slug}', function (Category $category) {
//     // Query dasar artikel
//     $articles = $category->slug === 'all'
//         ? Article::query()
//         : $category->articles();

//     // Filter pencarian
//     if ($search = request('search')) {
//         $articles->where('title', 'like', '%' . $search . '%');
//     }

//     // Hasil paginasi
//     $articles = $articles->latest()->paginate(10);

//     return view('articles.category', [
//         'title' => $category->slug === 'all' ? 'Semua Kategori' : $category->name,
//         'articles' => $articles,
//         'categories' => Category::all(), // Untuk dropdown kategori
//     ]);
// })->name('category.show');

Route::get('/category/{category:slug?}', function ($slug = null) {
    if ($slug === 'all' || $slug === null) {
        $articles = Article::latest();
    } else {
        $category = Category::where('slug', $slug)->firstOrFail();
        $articles = $category->articles()->latest();
    }

    // Filter pencarian
    if ($search = request('search')) {
        $articles->where('title', 'like', '%' . $search . '%');
    }

    return view('articles.category', [
        'title' => $slug === 'all' || $slug === null ? 'Semua Kategori' : $category->name,
        'articles' => $articles->paginate(10),
        'categories' => Category::all(),
    ]);
})->name('category.show');




Route::get('/category/all', function () {
    $articles = Article::latest();

    // Filter pencarian
    if ($search = request('search')) {
        $articles->where('title', 'like', '%' . $search . '%');
    }

    return view('articles.category', [
        'title' => 'Semua Kategori',
        'articles' => $articles->paginate(10),
        'categories' => Category::all(), // Untuk dropdown kategori
    ]);
})->name('category.all');
