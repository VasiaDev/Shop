<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class DeleteController extends Controller
{
    public function __invoke(Product $product)
    {
        if ($product->preview_image && Storage::disk('public')->exists($product->preview_image)) {
            Storage::disk('public')->delete($product->preview_image);
        }

        foreach ($product->productImages as $image) {
            if ($image->file_path && Storage::disk('public')->exists($image->file_path)) {
                Storage::disk('public')->delete($image->file_path);
            }
        }

        $product->productImages()->delete();

        $product->colors()->detach();
        $product->tags()->detach();

        $product->delete();

        return redirect()->route('product.index');
    }
}
