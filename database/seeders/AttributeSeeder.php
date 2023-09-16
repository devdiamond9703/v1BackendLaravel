<?php

namespace Database\Seeders;

use App\Models\Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for phone, clothes, computer
        Attribute::create([
            'name' => 'color',
            'type' => 'select'
        ]);
        Attribute::create([
            'name' => 'memory',
            'type' => 'select'
        ]);
        // Attribute::create(['name' => 'cpu']);
        // Attribute::create(['name' => 'ram']);
        // Attribute::create(['name' => 'screen']);
        // Attribute::create(['name' => 'size']);
        
    }
}
