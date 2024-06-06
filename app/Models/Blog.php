<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'category',
        'tags',
        'title',
        'author',
        'meta_title',
        'meta_desc',
        'desc',
        'image',
        'video',
    ];
}
