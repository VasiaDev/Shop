<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductImage;
use App\Models\ProductTag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Throwable;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $productImages = $data['product_images'];
        $tagsIds = $data['tag_ids'];
        $colorsIds = $data['color_ids'];
        unset($data['tag_ids'], $data['color_ids'], $data['product_images']);

        $previewImagePath = Storage::disk('public')->put('/images', $data['preview_image']);
        $data['preview_image'] = $previewImagePath;

        try {
            DB::beginTransaction();

            $product = Product::create($data);

            foreach ($tagsIds as $tagId) {
                ProductTag::create([
                    'product_id' => $product->id,
                    'tag_id' => $tagId,
                ]);
            }

            foreach ($colorsIds as $colorId) {
                ProductColor::create([
                    'product_id' => $product->id,
                    'color_id' => $colorId,
                ]);
            }

            foreach ($productImages as $productImage) {
                $count = ProductImage::where('product_id', $product->id)->count();
                if ($count > 3) continue;

                $filePath = Storage::disk('public')->put('/images', $productImage);
                ProductImage::create([
                    'product_id' => $product->id,
                    'file_path' => $filePath,
                ]);
            }

            DB::commit();
        } catch (Throwable $e) {
            DB::rollBack();
            Storage::disk('public')->delete($previewImagePath);
            throw $e;
        }

        return redirect()->route('product.index');
    }
}
