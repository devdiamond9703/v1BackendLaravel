<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolePermission::class,
            AttributeSeeder::class,
            AttributeValueSeeder::class,
            ProductCategorySeeder::class,
            ProductCategoryAttributeSeeder::class,
            ProductSeeder::class,
            ProductPropertySeeder::class,
            ProductVariantSeeder::class,
            PriceSeeder::class,
            ImageSeeder::class,
            UserSeeder::class,
        ]);
    }
}
