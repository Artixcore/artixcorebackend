<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workwith extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'company_name',
        'logo',
        'url'
    ];
}
