<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', // Assuming 'name' is a field in the `blog_categories` table
        'slug', // Add other fields that are fillable
    ];
    public function blogs()
    {
        return $this->hasMany(Blog::class, 'category_id');
    }

}
