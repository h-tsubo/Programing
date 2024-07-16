<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Book extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['isbn', 'title', 'price', 'publisher', 'published'];

    public static $rules = [
        'isbn' => 'required',
        'title' => 'required|string|max:10',
        'price' => 'integer|min:0',
        'publisher' => 'required|in:走跳社,テックCode,ジャパンIT,優丸システム,IT Emotion',
        'published' => 'required|date'
    ];

    public function scopePricelessthan3000($query) {
        $query->where('price', '<', 3000);
    }

    public function scopePricelessthan($query, $price) {
        $query->where('price', '<', $price);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }
}
