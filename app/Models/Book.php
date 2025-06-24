<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title', 'author', 'rating', 'category_id'];

    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
