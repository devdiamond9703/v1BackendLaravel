<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function product() {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function attribute() {
        return $this->belongsToMany(\App\Models\Attribute::class, 'product_category_attributes', 'product_category_id', 'attribute_id');
    }
}
