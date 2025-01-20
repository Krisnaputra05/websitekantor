<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    protected $model = Article::class;

    public function definition()
    {
        $title = $this->faker->sentence(6); // Judul artikel
        
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'content' => $this->faker->paragraphs(5, true), // Konten artikel
            'image' => $this->faker->imageUrl(800, 400, 'business', true, 'Artikel'), // Gambar acak
            'status' => $this->faker->randomElement(['published', 'draft']), // Status artikel
            'published_at' => $this->faker->optional(0.8)->dateTimeThisYear(), // 80% kemungkinan dipublikasikan
            'views' => $this->faker->numberBetween(0, 1000), // Jumlah kunjungan acak
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
