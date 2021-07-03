<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("code_name");
            $table->string("mobile")->nullable();
            $table->string("gmail")->unique()->nullable();
            $table->string("gender");
            $table->string("hospital_name")->nullable();
            $table->string("blood")->nullable();
            $table->string("dob")->nullable();
            $table->string("occupation")->nullable();
            $table->string("religion")->nullable();
            $table->string("marital")->nullable();
            $table->string("p_note")->nullable();
            $table->string("address")->nullable();
            $table->string("relative_contact")->nullable();
            $table->string("refer")->nullable();
            $table->string('entry_by')->nullable();
            $table->string("password")->default(Hash::make('123456789'));
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
        Schema::dropIfExists('patients');
    }
}
