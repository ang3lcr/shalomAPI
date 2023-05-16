<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Cart;
use App\Models\Products;
use App\Models\ProductsInCart;
use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProductResource;
use Illuminate\Http\Request;
use App\Http\Controllers\V1\OrderController;




class CartController extends Controller
{
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

public function addProduct(Request $request) {
    

    
    $cart = Cart::where('user_id', $request->input('userId'))->first();
    if ($cart){
        $product = Products::where('id', $request->input('productId'))->firstOrFail();

        // Verificar si el producto ya existe en el carrito
        $productInCart = ProductsInCart::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
    
        if ($productInCart) {
            // Si el producto ya existe, actualizar la cantidad y el sub_total
            $productInCart->quantity += $request->input('quantity');
            $productInCart->sub_total = $productInCart->quantity * $product->price;
            $cart -> total = $productInCart -> sub_total;
            $cart -> save();
            $productInCart->save();

            
        } else {
            // Si el producto no existe, crear una nueva instancia del modelo ProductsInCart y establecer las relaciones
            $productInCart = new ProductsInCart;
            $productInCart->products()->associate($request->input('productId'));
            $productInCart->carts()->associate($cart);
            $productInCart->quantity = $request->input('quantity');
            $productInCart->sub_total += $request->input('quantity') * $product->price;
            $cart -> total = $productInCart -> sub_total;
            $cart -> save();
            $productInCart->save();
        }
     
        
        return response()->json(['message' => 'Product added to cart successfully'], 200);

    } else {
        
        $cart = new Cart();
        $cart -> user_id = $request -> input('userId');
        $cart -> total = 0;
        $cart -> save();
        $product = Products::where('id', $request->input('productId'))->firstOrFail();

        // Verificar si el producto ya existe en el carrito
        $productInCart = ProductsInCart::where('cart_id', $cart->id)->where('product_id', $product->id)->first();
    
        if ($productInCart) {
            // Si el producto ya existe, actualizar la cantidad y el sub_total
            $productInCart->quantity += $request->input('quantity');
            $productInCart->sub_total = $productInCart->quantity * $product->price;
            $cart -> total = $productInCart -> sub_total;
            $cart -> save();
            $productInCart->save();
        } else {
            // Si el producto no existe, crear una nueva instancia del modelo ProductsInCart y establecer las relaciones
            $productInCart = new ProductsInCart;
            $productInCart->products()->associate($request->input('productId'));
            $productInCart->carts()->associate($cart);
            $productInCart->quantity = $request->input('quantity');
            $productInCart->sub_total = $request->input('quantity') * $product->price;
            $cart -> total = $productInCart -> sub_total;
            $cart -> save();
            $productInCart->save();
        }
      
        
           
    // Retornar una respuesta HTTP indicando que se ha agregado el producto al carrito
    return response()->json(['message' => 'Cart created and Product added to cart successfully'], 200);

    }
    





}



    //userId
    public function getProductsInCart(Request $request) {
        $cartId = Cart::where('user_id', $request->input('userId'))->first()->id;
        $productsInCart = ProductsInCart::where('cart_id', $cartId)->get();
    
        $productsInCartIds = $productsInCart->pluck('product_id');
       
        $products = Products::whereIn('id', $productsInCartIds) -> get();
    
        return response() -> json([
            "message" => "Success",
            "productsInCart" => $products
        ], 200);

    }


    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartRequest $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
