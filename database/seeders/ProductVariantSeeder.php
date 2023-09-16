<?php

namespace Database\Seeders;

use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductVariant::create([
            'product_id' => 1,
            'name' => 'Samsung A50 yellow 32 gb'
        ]);
        ProductVariant::create([
            'product_id' => 2,
            'name' => 'cer Aspire core i3 blue 512 gb'
        ]);        
    }
}
