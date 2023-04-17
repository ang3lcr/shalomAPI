<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h1>Routes</h1>

```php
//PRODUCT ROUTES// {name->string, description->string, price->float, stock->integer, productImage->string, categoryId->integer}
Route::get('v1/products', 'App\Http\Controllers\Api\V1\ProductsController@index');
Route::post('v1/products', 'App\Http\Controllers\Api\V1\ProductsController@store');

//USERS ROUTES// {username->string, email->string, password->string, address->string, phone->string}
Route::post('v1/users', 'App\Http\Controllers\Api\V1\UserController@store');

//CART ROUTES// {cartId->integer, productId->integer, quantity->integer} add product to cart
Route::post('v1/cart', 'App\Http\Controllers\Api\V1\CartController@addProduct');

//CATEGORIES ROUTES// {category->string}
Route::post('v1/categories', 'App\Http\Controllers\Api\V1\CategoriesController@store');
Route::get('v1/categories', 'App\Http\Controllers\Api\V1\CategoriesController@index');

```
