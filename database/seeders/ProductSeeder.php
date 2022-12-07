<?php

namespace Database\Seeders;

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
        Product::create(
            [
                'name' => 'luxurious Watch',
                'slug' => 'luxurious-watch',
                'description' => '<ul><li><i class="icofont-check"></i> Crown Protector</li> <li><i class="icofont-check"></i> Water Proof</li></ul>',
                'image_name' => 'watch-3.png',
                'price' => 250.00,
                'sale_price' => 120.00,
            ]);
        
    }
}
