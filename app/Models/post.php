<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = [
        'user_id',
        'title',
        'name',
        'category',
        'content',
        'image_url',
    ];
}
