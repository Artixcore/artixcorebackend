<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Str;
class Page extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'description', 'status'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = \Str::slug($value);
    }
}
