<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_names', function (Blueprint $table) {
            $table->id();
            $table->string('test_name')->nullable();
            $table->string('floor_no')->nullable();
            $table->string('room_no')->nullable();
            $table->integer('test_fees')->nullable();
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
        Schema::dropIfExists('test_names');
    }
}
