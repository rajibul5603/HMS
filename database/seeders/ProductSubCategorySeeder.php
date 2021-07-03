<?php

namespace Database\Seeders;

use App\Models\Product\ProductSubCategory;
use Illuminate\Database\Seeder;

class ProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductSubCategory::insert(['name' => 'Incubation Chamber', 'description' =>'Incubation Chamber', 'product_category_id' => '1', 'status' => 1]);
    }
}
