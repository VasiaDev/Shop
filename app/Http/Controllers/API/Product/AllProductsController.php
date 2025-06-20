<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductMinResource;
use App\Models\Product;

class AllProductsController extends Controller
{
    public function __invoke()
    {
        $products = Product::where('is_published', true)->get();

        return ProductMinResource::collection($products);
    }
}
