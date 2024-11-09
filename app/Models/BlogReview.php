<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogReview extends Model
{
    protected $fillable = [
        'blog_id',
        'name',
        'email',
        'comment',
        'approved',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
