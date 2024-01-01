<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompleteProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Product $product)
    {
    	$product->is_completed = $request->is_completed;

    	$product->save();

    	return ProductResource::make($product);
        
    }
}
