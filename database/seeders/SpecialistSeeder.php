<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Specialist;

class SpecialistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Specialist::insert(['name'=> 'Anesthesiologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Cardiologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Colon & Rectal Surgeons', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Critical Care Medicine', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Dermatologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Endocrinologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Emergency Medicine', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Family Physicians', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Gastroenterologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Geriatric Medicine', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Nephrologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Neurologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Ophthalmologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Osteopaths', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Otolaryngologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Plastic Surgeons', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Pulmonologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Radiologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
        Specialist::insert(['name'=> 'Rheumatologists', 'user_id'=> '1', 'code_name' => 'MHK', 'created_at'=>now()]);
    }
}
