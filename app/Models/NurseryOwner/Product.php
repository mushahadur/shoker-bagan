<?php

namespace App\Models\NurseryOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'name',
        'price',
        'stock',
        'image',
        'description',
    ];
}
