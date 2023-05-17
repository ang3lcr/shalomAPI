<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Models\Cart;
use App\Http\Controllers\Controller;
use App\Models\ProductsInCart;





class PurchaseController extends Controller
{
        //{userId}
        
        public function purchaseCart(Request $request) {

                $cart = Cart::where('user_id', $request->input("userId"))->firstOrFail();
                ProductsInCart::where('cart_id', $cart->id)->delete();
        
                return response()->json([
                    'message' => 'Purchase Completed :)',
                ], 200);
            } 

            

           

        }

