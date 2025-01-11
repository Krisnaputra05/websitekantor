<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory;

    // Kolom yang dapat diisi (mass assignment)
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'status',
        'published_at',
        'views', // Tambahkan views untuk jumlah kunjungan
    ];

    // Casting kolom ke tipe data tertentu
    protected $casts = [
        'published_at' => 'datetime',
        'views' => 'integer', // Pastikan views di-cast ke integer
    ];

    // Scope untuk mendapatkan artikel yang dipublikasikan
    // public function scopePublished($query)
    // {
    //     return $query->where('status', 'published')->whereNotNull('published_at');
    // }

    // Accessor untuk format gambar (contoh jika ingin membuat URL penuh)
    public function getImageUrlAttribute()
    {
        return $this->image ? asset('storage/' . $this->image) : null;
    }

    // Accessor untuk slug dengan format URL
    public function getUrlAttribute()
    {
        return route('articles.show', $this->slug);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Scope untuk artikel draft
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }
}
