<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];
    
    // protected $attributes = [
    //     'color_class' => 'bg-blue-500', // Default class jika tidak ada warna khusus
    // ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
