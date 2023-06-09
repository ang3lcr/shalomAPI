<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//PRODUCT ROUTES// {name->string, description->string, price->float, stock->integer, productImage->string, categoryId->integer}
Route::get('v1/products', 'App\Http\Controllers\Api\V1\ProductsController@index');


//USERS ROUTES// {username->string, email->string, password->string, address->string, phone->string}
Route::post('v1/users', 'App\Http\Controllers\Api\V1\UserController@store');
Route::get('v1/users', 'App\Http\Controllers\Api\V1\UserController@index');
Route::post('v1/users/login', 'App\Http\Controllers\Api\V1\UserController@login');




//CART ROUTES// {cartId->integer, productId->integer, quantity->integer} add product to cart
Route::post('v1/cart/addToCart', 'App\Http\Controllers\Api\V1\CartController@addProduct');


//userId, productId
Route::post('v1/cart/remove', 'App\Http\Controllers\Api\V1\CartController@removeFromCart');


//CATEGORIES ROUTES// {category->string}
Route::post('v1/categories', 'App\Http\Controllers\Api\V1\CategoriesController@store');
Route::get('v1/categories', 'App\Http\Controllers\Api\V1\CategoriesController@index');



Route::post('v1/products', 'App\Http\Controllers\Api\V1\ProductsController@store');

/////RUTAS PROTEGIDAS\\\\\\\\
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('v1/users/logout', [UserController::class, 'logout']);
    //PURCHASE ROUTES// {orderId}
    Route::post('v1/purchase', 'App\Http\Controllers\Api\V1\PurchaseController@purchaseCart');
    Route::post('v1/cart', 'App\Http\Controllers\Api\V1\CartController@getProductsInCart');

    
});

