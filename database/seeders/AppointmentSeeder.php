<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Appointment::insert(['patient_id'=> '1', 'user_id'=> '1', 'date'=> '3.07.2021', 'time'=>'01:50',  'fees'=>'1050', 'code_name' => 'MHK', 'created_at'=>now()]);
    }
}
