<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // phone product
        Product::create([
            'product_category_id' => 1,
            'name' => 'Samsung A50',
            'description' => 'High brightness and beautiful appearance'
        ]);


        // computer product
        Product::create([
            'product_category_id' => 2,
            'name' => 'Acer Aspire core i3',
            'description' => 'High brightness and beautiful appearance'
        ]);
        
    }
}
