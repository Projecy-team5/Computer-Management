<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    public $timestamps = false; // You mentioned no timestamps in migration
    protected $fillable = ['product_id', 'name', 'value'];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
