<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductsInCart;
use App\Models\ProductsInOrder;
use App\Models\Categories;




class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'product_image',
        'category_id',
    ];

    public function productInOrders() {
        return $this->hasMany(ProductsInOrder::class);
    }

    public function productInCarts() {
        return $this->hasMany(ProductsInCart::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }
}
