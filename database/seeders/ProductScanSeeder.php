<?php

namespace Database\Seeders;

use App\Models\Product\ProductScan;
use Illuminate\Database\Seeder;

class ProductScanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        ProductScan::insert(['name' => 'Barcode', 'description' =>'Barcode Scan', 'status' => 1]);
        ProductScan::insert(['name' => 'Serial', 'description' =>'Serial Scan', 'status' => 1]);
        ProductScan::insert(['name' => 'IMEI', 'description' =>'IMEI Scan', 'status' => 1]);

    }
}
