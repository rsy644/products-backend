<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        	'product_id' => $this->id,
        	'product_name' => $this->product_name,
        	'product_image' => $this->product_image,
        	'product_price' => $this->product_price
        ];
    }
}
