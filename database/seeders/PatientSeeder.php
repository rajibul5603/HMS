<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Patient::insert(['name'=> 'Patient', 'code_name'=> 'MHK', 'mobile'=> '1766169534', 'blood'=> 'AB+', 'gmail'=> 'humayon@gmail.com', 'gender'=>'Male', 'created_at'=>now()]);
      Patient::insert(['name'=> 'Kabir', 'code_name'=> 'ADM', 'mobile'=> '1766169534', 'blood'=> 'AB+', 'gmail'=> 'kabir@gmail.com', 'gender'=>'Male', 'created_at'=>now()]);
      Patient::insert(['name'=> 'Kabir Sing', 'code_name'=> 'MHK', 'mobile'=> '1766169534', 'blood'=> 'AB-', 'gmail'=> 'kabirsing@gmail.com', 'gender'=>'Male', 'created_at'=>now()]);
      Patient::insert(['name'=> 'Sing', 'code_name'=> 'ADM', 'mobile'=> '1766169534', 'blood'=> 'AB-', 'gmail'=> 'sing@gmail.com', 'gender'=>'Male', 'created_at'=>now()]);
    }
}
