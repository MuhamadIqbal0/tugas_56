<?php

use Illuminate\Database\Elequnt\Factories\HasFactory;
use Illuminate\Database\Elequnt\Model;

class ProductController extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
    ]
}