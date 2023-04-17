<?php

namespace App\Http\Controllers\V1;

use Illuminate\Http\Request\V1;
use App\Models\Products;
use App\Models\Users;
use App\Models\ProductsInCart;
use App\Models\ProductsInOrder;
use App\Models\Order;
use App\Models\Cart;
use App\Http\Controllers\Controller;







class OrderController extends Controller
{
    public function createOrder($cart) {
        $cart = Cart::where('user_id', $cart->input('userId'))->firstOrFail();
        $order = new Order();
        $order -> total = $cart -> total;
        $order -> user_id = $cart -> userId;
        $order -> is_completed = false;
        $order -> save();
    }
    //userId, total, isCompleted
    public function updateOrder($cart) {
        $order = Order::where('user_id', $cart -> userId) -> firstOrFail();
        $order -> total = $cart -> total;
        $order -> is_completed = false;
        $order -> save();
        
    }
    
    public function showPurchases($id){
        
    }


}
