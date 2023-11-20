<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'brand', 'price', 'price_sale', 'category', 'stock',
    ];
    use HasFactory;
}
