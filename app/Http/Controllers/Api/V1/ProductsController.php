<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\Products;
use App\Http\Requests\UpdateProductsRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StoreProductsRequest;
use App\Http\Resources\V1\ProductResource;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Products::all();
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductsRequest $request)
    {
        
            $product = new ProductResource(Products::create($request->all()));

            return response() -> json([
                'message' => 'Product created succesfully',
                'product' => $product
            ], 201);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Products::find($id);
        return new ProductResource($product);
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductsRequest $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Products $products)
    {
        //
    }
}

