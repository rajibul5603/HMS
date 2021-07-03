<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ModuleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ProductParentSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductSubCategorySeeder::class);
        $this->call(ProductManufacturerSeeder::class);
        $this->call(ProductBrandSeeder::class);
        $this->call(ProductScanSeeder::class);
        $this->call(CountriesSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(BloodSeeder::class);
        $this->call(RoomSeeder::class);


    }
}
