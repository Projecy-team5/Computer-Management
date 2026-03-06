<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['sku', 'name', 'slug', 'category_id', 'brand_id', 'price', 'stock', 'is_visible'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function attributes() {
        return $this->hasMany(ProductAttribute::class);
    }

    public function images() {
        return $this->hasMany(ProductImage::class);
    }
}
