<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoteCode extends Model
{
    use HasFactory;

    protected $table = 'vote_codes'; // Specify the table name if it doesn't follow convention

    protected $fillable = [
        'code',   // The vote code
        'is_used', // Whether the code is used
    ];
}
