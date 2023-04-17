<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


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



//  Route::group(['prefix'=> 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function() {
//      Route::apiResource('products', ProductsController::class);
//      Route::apiResource('users', UserController::class);
//      Route::apiResource('carts', ProductInCartController::class);
//  });


Route::get('v1/products', 'App\Http\Controllers\Api\V1\ProductsController@index');
Route::post('v1/cart', 'App\Http\Controllers\Api\V1\CartController@addProduct');
Route::post('v1/users', 'App\Http\Controllers\Api\V1\UserController@store');
Route::post('v1/categories', 'App\Http\Controllers\Api\V1\CategoriesController@store');





