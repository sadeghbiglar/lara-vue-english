<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserWords extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'word_id',
        'review1',
        'review2',
        'review3',
        'review1_date',
        'review2_date',
        'review3_date',
    ];
    
}
