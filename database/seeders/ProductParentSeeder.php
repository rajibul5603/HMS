<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Seeder;
use App\Models\Product\ProductParent;

class ProductParentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        ProductParent::insert(['name' => 'Machine', 'description' =>'Machine', 'status' => 1]);
    }
}
