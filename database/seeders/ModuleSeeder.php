<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Auth\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Module::insert(['name'=>'Super User Management']);
        Module::insert(['name'=>'User Management']);
        Module::insert(['name'=>'Roles Management']);
        Module::insert(['name'=>'Patients Management']);
        Module::insert(['name'=>'Appointment Management']);
        Module::insert(['name'=>'Blood Management']);
        Module::insert(['name'=>'Room Management']);
        Module::insert(['name'=>'Emergency Management']);
        Module::insert(['name'=>'Reception Management']);
        Module::insert(['name'=>'Report Management']);
        Module::insert(['name'=>'Billing Management']);
        Module::insert(['name'=>'Laboratory Management']);
        Module::insert(['name'=>'Setting Management']);
        Module::insert(['name'=>'Test Name Management']);
    }
}
