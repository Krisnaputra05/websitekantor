<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder {
    public function run() {
        $categories = [
            ['name' => 'Perkawinan & Perceraian', 'slug' => 'perkawinan-perceraian'],
            ['name' => 'Hukum Perdata', 'slug' => 'hukum-perdata'],
            ['name' => 'Hukum Pidana', 'slug' => 'hukum-pidana'],
            ['name' => 'Hukum Ketenagakerjaan', 'slug' => 'hukum-ketenagakerjaan'],
            ['name' => 'Hak Asasi Manusia', 'slug' => 'hak-asasi-manusia']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

