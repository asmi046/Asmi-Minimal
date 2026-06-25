<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'sort_order',
        'cover',
        'description',
        'gallery',
    ];

    protected $casts = [
        'sort_order' => 'integer',
        'gallery' => 'array',
    ];
}
