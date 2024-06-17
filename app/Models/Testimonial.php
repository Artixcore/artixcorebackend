<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'source',
        'image',
        'review',
        'stars',
        'linkedin_id',
        'project_name',
        'project_id',
        'gender',
        'country',
        'state',
        'city'
    ];
}
