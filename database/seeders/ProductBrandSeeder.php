<?php

namespace Database\Seeders;

use App\Models\Product\ProductBrand;
use Illuminate\Database\Seeder;

class ProductBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductBrand::insert(['name' => 'Chema', 'description' =>'Chema', 'status' => 1]);
    }
}
