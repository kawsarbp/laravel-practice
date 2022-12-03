<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'category_id',
        'title',
        'slug',
        'description',
        'photo',
        'satus',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
