<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $tagIds = $data['tag_ids'] ?? [];
        $colorIds = $data['color_ids'] ?? [];

        unset($data['tag_ids'], $data['color_ids']);

        if (isset($data['price']) && $product->price != $data['price']) {
            $data['old_price'] = $product->price;
        }

        $product->update($data);

        $product->tags()->sync($tagIds);
        $product->colors()->sync($colorIds);

        return redirect()->route('product.index');
    }
}
