<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'sku' => $this->sku,
            'name' => $this->name,
            'slug' => $this->slug,
            'short_description' => $this->short_description,
            'price' => $this->price,
            'formatted_price' => $this->formatted_price,
            'compare_price' => $this->compare_price,
            'formatted_compare_price' => $this->formatted_compare_price,
            'discount_percentage' => $this->discount_percentage,
            'quantity' => $this->quantity,
            'in_stock' => $this->isInStock(),
            'stock_status' => $this->stock_status,
            'featured_image' => $this->featured_image_url,
            'images' => ProductImageResource::collection($this->whenLoaded('images')),
            'rating' => $this->rating,
            'total_reviews' => $this->total_reviews,
            'category' => new CategoryResource($this->whenLoaded('category')),
            'brand' => new BrandResource($this->whenLoaded('brand')),
            'specifications' => $this->specifications,
            'is_featured' => $this->is_featured,
            'is_bestseller' => $this->is_bestseller,
            'is_new_arrival' => $this->is_new_arrival,
            'is_on_sale' => $this->is_on_sale,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
