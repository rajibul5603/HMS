<?php

namespace Database\Seeders;

use App\Models\Auth\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::insert(['name' => 'No Role', 'slug' => 'no_role', 'status' => 1]);
        Role::insert(['name' => 'Super Admin', 'slug' => 'super_admin', 'status' => 1]);
        Role::insert(['name' => 'Admin', 'slug' => 'admin', 'status' => 1]);
        Role::insert(['name' => 'Doctor', 'slug' => 'doctor', 'status' => 1]);
        Role::insert(['name' => 'Nurse', 'slug' => 'nurse', 'status' => 1]);
        Role::insert(['name' => 'Reception', 'slug' => 'reception', 'status' => 1]);
        Role::insert(['name' => 'Laboratory', 'slug' => 'laboratory', 'status' => 1]);

    }
}
