<?php

namespace App\Http\Controllers\Api\V1;


use App\Models\ProductInOrders;
use App\Http\Requests\StoreProductInOrdersRequest;
use App\Http\Requests\UpdateProductInOrdersRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\ProductsInOrdersResource;

class ProductInOrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductInOrdersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductInOrders $productInOrders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductInOrders $productInOrders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductInOrdersRequest $request, ProductInOrders $productInOrders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductInOrders $productInOrders)
    {
        //
    }
}
