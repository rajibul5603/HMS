<?php

namespace Database\Seeders;

use App\Models\Product\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductCategory::insert(['name' => 'Biochemistry Analyzer', 'description' =>'Biochemistry Analyzer', 'product_parent_id' => '1', 'status' => 1]);
    }
}
