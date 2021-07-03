<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Country::insert(['name' => 'Bangladesh', 'short_name' =>'BD', 'status' => 1]);
        Country::insert(['name' => 'India', 'short_name' =>'IN', 'status' => 1]);
        Country::insert(['name' => 'Pakistan', 'short_name' =>'PK', 'status' => 1]);
    }
}
