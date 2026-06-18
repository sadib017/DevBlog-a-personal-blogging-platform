<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'name',   //they must match database column name
        'email',
        'query'
    ];
}
