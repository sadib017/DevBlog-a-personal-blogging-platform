<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'name',   //they must match both column name and html input attributes
        'email',
        'query'
    ];
}
