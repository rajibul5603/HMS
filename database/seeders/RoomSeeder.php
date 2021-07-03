<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Room::insert(['room_no'=> '201', 'room_type'=> 'Non Ac', 'no_of_bad'=> '3', 'price'=>'150', 'code_name' => 'MHK', 'created_at'=>now()]);
    }
}
