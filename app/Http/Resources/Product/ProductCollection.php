<?php

namespace App\Http\Resources\Product;

use App\Models\Product;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;
class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($product){
            return [
                'title' => $product->title,
                'totalPrice' => round((1- ($product->discount /100)) * $product->price,2),
                'href' =>[
                    'product' => route('product.show',$product->id)
                ],
            ];
        });
    }
   
}
