<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanySetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_setups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->text('name')->unique()->nullable();
            $table->text('slogan')->nullable();
            $table->string('mobile')->nullable();
            $table->string('phone')->nullable();
            $table->string('fax')->nullable();
            $table->string('tin')->nullable();
            $table->string('web')->nullable();
            $table->string('email')->nullable();
            $table->string('logo')->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('company_setups');
    }
}
