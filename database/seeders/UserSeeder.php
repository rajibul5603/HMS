<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert(['name'=> 'Humayon Kabir', 'code_name'=> 'MHK', 'email'=> 'humayonkabir@gmail.com', 'designation'=>'Super Admin', 'password'=>Hash::make('123456789'), 'status'=>'1', 'created_at'=>now()]);
        User::insert(['name'=> 'Admin', 'code_name'=> 'ADM', 'email'=> 'admin@admin.com', 'designation'=>'doctor', 'password'=>Hash::make('123456789'), 'status'=>'1', 'created_at'=>now()]);
        User::insert(['name'=> 'Doctor', 'code_name'=> 'MHK', 'email'=> 'doctor@gamil.com', 'designation'=>'doctor', 'password'=>Hash::make('123456789'), 'status'=>'1', 'created_at'=>now()]);
        User::insert(['name'=> 'Dr. Doctor', 'code_name'=> 'MHK', 'email'=> 'drdoctor@gamil.com', 'designation'=>'doctor', 'password'=>Hash::make('123456789'), 'status'=>'1', 'created_at'=>now()]);
    }

}
