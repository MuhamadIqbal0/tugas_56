<?php

namespace App\models;

use Illuminate\Database\Models;

class post extends Models{
    use HasFactory;
    protected $fillable = ['title', 'content'];
}