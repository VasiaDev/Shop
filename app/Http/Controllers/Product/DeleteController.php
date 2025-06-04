<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        $product->colors()->detach();
        $product->tags()->detach();

        $product->delete();

        return redirect()->route('product.index');
    }
}
