<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'description' => 'required',
            'content' => 'required',
            'price' => 'required',
            'count' => 'required',
            'preview_image' => 'required',
            'product_images' => 'nullable|array',
            'product_images.*' => 'image',
            'category_id' => 'nullable',
            'tag_ids' => 'nullable|array',
            'color_ids' => 'nullable|array',
            'is_published' => 'nullable',
        ];
    }
}
