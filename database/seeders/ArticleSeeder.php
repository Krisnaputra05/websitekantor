<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Category;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Pastikan ada kategori terlebih dahulu
        if (Category::count() == 0) {
            Category::factory(5)->create(); // Buat 5 kategori jika belum ada
        }

        // Buat 20 artikel menggunakan factory
        Article::factory(10)->create();
    }
}
