<?php

namespace App\Http\Controllers\API\Product;

use App\Http\Controllers\Controller;
use App\Http\Resources\Product\ProductResource;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;

class FilterListController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $colors = Color::all();
        $tags = Tag::all();

        $publishedProducts = Product::where('is_published', 1);

        $minPrice = $publishedProducts->min('price');
        $maxPrice = $publishedProducts->max('price');

        $result = [
            'categories' => $categories,
            'colors' => $colors,
            'tags' => $tags,
            'price' => [
                'min' => $minPrice,
                'max' => $maxPrice
            ]
        ];

        return response()->json($result);
    }
}
