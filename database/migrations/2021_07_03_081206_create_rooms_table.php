<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_no')->unique();
            $table->string('room_type')->nullable();
            $table->string('no_of_bad')->nullable();
            $table->string('price')->nullable();
            $table->integer('status')->default(0);
            $table->string('booking')->nullable();
            $table->string('reliesed')->nullable();
            $table->string('code_name')->nullable();
            $table->string('entry_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
