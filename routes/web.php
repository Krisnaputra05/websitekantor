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

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


// Route::get('/articles/{id}', [ContactController::class, 'show'])->name('article.show');

// Rute untuk halaman kontak
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Perbaiki rute untuk menampilkan artikel berdasarkan slug
Route::get('/article/{slug}', [ContactController::class, 'show'])->name('articles.show');


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

    // Protected Admin Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
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