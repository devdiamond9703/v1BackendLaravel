<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_category_id', 'name', 'description'];

    public function productCategory()
    {
        return $this->belongsTo(\App\Models\ProductCategory::class);
    }

    public function productProperty() {
        return $this->belongsToMany(\App\Models\ProductProperty::class, 'product_properties', 'product_id','attribute_id');
    }

    public function productVariant() {
        return $this->hasMany(\App\Models\ProductVariant::class);
    }
}
