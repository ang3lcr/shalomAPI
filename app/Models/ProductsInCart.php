<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
use App\Models\Cart;

class ProductsInCart extends Model
{
    use HasFactory;

    public function products() {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function carts() {
        return $this->belongsTo(Cart::class, 'cart_id');
    }


}
