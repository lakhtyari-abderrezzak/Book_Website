<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'author', 'edition', 'description', 'img_path', 'featured'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getImgPathAttribute($value)
    {
        return Str::startsWith($value, ['http://', 'https://'])
        ? $value
        : asset('storage/' . $value);
    }
}
