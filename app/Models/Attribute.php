<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'type'];

    public function attributeValue() {
        return $this->hasMany(\App\Models\AttributeValue::class);
    }

    public function productCategory() {
        return $this->belongsToMany(\App\Models\ProductCategory::class, 'product_category_attributes', 'product_category_id', 'attribute_id');
    }

    public function productProperty() {
        return $this->belongsToMany(\App\Models\ProductProperty::class, 'product_properties', 'product_id', 'attribute_id');
    }
}
