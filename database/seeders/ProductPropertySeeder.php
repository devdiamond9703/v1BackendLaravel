<?php

namespace Database\Seeders;

use App\Models\ProductProperty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductPropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductProperty::create([
            'product_id' => 1,
            'attribute_id' => 1,
            'attribute_value_id' => 1
        ]);
        ProductProperty::create([
            'product_id' => 1,
            'attribute_id' => 2,
            'attribute_value_id' => 1
        ]);

        ProductProperty::create([
            'product_id' => 1,
            'attribute_id' => 1,
            'attribute_value_id' => 2
        ]);
        ProductProperty::create([
            'product_id' => 1,
            'attribute_id' => 2,
            'attribute_value_id' => 2
        ]);
    }
}
