<?php

namespace App\Models;

use App\Models\User;
use App\Models\NurseryOwner\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nursery_id',
        'product_id',
        'category',
        'name',
        'price',
        'image',
        'status',
    ];

     // Relationship to user
     public function user()
     {
         return $this->belongsTo(User::class, 'user_id');
     }
 
     // Relationship to product
     public function product()
     {
         return $this->belongsTo(Product::class, 'product_id');
     }
}
