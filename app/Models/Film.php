<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'description', 'release_year','genre','cover','duration'];
}
