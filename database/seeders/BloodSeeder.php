<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blood;

class BloodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Blood::insert(['blood'=> 'A+', 'stored_date'=> now() , 'expired_date'=> now(), 'created_at'=>now()]);
        Blood::insert(['blood'=> 'B+', 'stored_date'=> now() , 'expired_date'=> now(), 'created_at'=>now()]);
        Blood::insert(['blood'=> 'C+', 'stored_date'=> now() , 'expired_date'=> now(), 'created_at'=>now()]);
        Blood::insert(['blood'=> 'D+', 'stored_date'=> now() , 'expired_date'=> now(), 'created_at'=>now()]);

    }
}
