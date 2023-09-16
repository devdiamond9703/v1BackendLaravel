<?php

namespace Database\Seeders;

use App\Models\AttributeValue;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AttributeValue::create([
            'attribute_id' => 1,
            'value' => 'yellow'
        ]);
        AttributeValue::create([
            'attribute_id' => 1,
            'value' => 'blue'
        ]);
        AttributeValue::create([
            'attribute_id' => 2,
            'value' => '32 gb'
        ]);
        AttributeValue::create([
            'attribute_id' => 2,
            'value' => '512 gb'
        ]);
    }
}
