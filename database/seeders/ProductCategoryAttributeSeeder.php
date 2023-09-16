<?php

namespace Database\Seeders;

use App\Models\ProductCategoryAttribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategoryAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for phone rel property
        ProductCategoryAttribute::create([
            'product_category_id' => 1,
            'attribute_id' => 1,
            'sort' => 1,
            'status' => 1,
        ]);
        ProductCategoryAttribute::create([
            'product_category_id' => 1,
            'attribute_id' => 2,
            'sort' => 2,
            'status' => 1,
        ]);
        
        // for computer rel property
        ProductCategoryAttribute::create([
            'product_category_id' => 2,
            'attribute_id' => 1,
            'sort' => 1,
            'status' => 1,
        ]);
        ProductCategoryAttribute::create([
            'product_category_id' => 2,
            'attribute_id' => 2,
            'sort' => 2,
            'status' => 1,
        ]);
        
    }
}
