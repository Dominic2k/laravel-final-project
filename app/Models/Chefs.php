<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chefs extends Model
{
    protected $casts = [
        'social_links' => 'array',
    ];
}
