<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'district',
        'short_description',
        'banner',
        'slug',
        'category_id',  // Add this line
    ];
    public function category()
{
    return $this->belongsTo(BlogCategory::class);
}
public function reviews()
{
    return $this->hasMany(BlogReview::class); // Thêm quan hệ đến BlogReview
}
}
