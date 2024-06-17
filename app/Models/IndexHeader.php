<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndexHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'url',
        'media',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_author'
    ];
}
