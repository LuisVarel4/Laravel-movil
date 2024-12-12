<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Campos que pueden ser llenados masivamente
    protected $fillable = ['name', 'category', 'price', 'stock'];
}
