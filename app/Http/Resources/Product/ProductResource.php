<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'ProductTitle' => $this->title,
            'ProductDetails' => $this->description,
            'price' => $this->price,
            'discount' => $this->discount,
            'totalPrice' => round((1- ($this->discount /100)) * $this->price,2),
            'stock' => $this->stock,
            'href' =>[
                'details' => route('details.index',$this->id)
            ],

        ];
    }
}
