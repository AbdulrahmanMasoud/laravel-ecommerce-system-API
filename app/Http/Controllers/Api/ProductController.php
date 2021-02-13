<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        // return  ProductResource::collection(Product::all());
        return new ProductCollection(Product::all());
    }


    
    public function store(Request $request){}

    
    public function show(Product $product)
    {
        // return $product;
        return new ProductResource($product);
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
