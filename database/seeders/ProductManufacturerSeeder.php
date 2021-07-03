<?php

namespace Database\Seeders;

use App\Models\Product\ProductManufacturer;
use Illuminate\Database\Seeder;

class ProductManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductManufacturer::insert(['name' => 'No Manufacturer', 'status' => 1]);
    }
}
