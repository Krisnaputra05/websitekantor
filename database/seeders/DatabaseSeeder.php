<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,    // Jalankan UserSeeder dulu
            CategorySeeder::class, // Kemudian CategorySeeder
            ArticleSeeder::class,  // Terakhir, ArticleSeeder
        ]);
    }
}
