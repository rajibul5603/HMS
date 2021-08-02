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
        Room::insert(['floor_name'=> '1st Floor', 'room_no'=> '201', 'room_type'=> 'Non Ac', 'no_of_bad'=> '3', 'booking'=> 'No', 'price'=>'150', 'code_name' => 'MHK', 'created_at'=>now()]);
    }
}
