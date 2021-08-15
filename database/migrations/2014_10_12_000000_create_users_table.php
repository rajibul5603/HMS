<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('code_name')->nullable();
            $table->string('password');
            $table->string('password_hint')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('designation')->nullable();
            $table->float('salary')->nullable();
            $table->text('education')->nullable();
            $table->text('permanent_address')->nullable();
            $table->text('emergency_contact')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->text('remarks')->nullable();
            $table->text('profile_photo_path')->nullable();
            $table->integer('status')->default(1);
            $table->string('ip')->nullable();
            $table->string('mac')->nullable();
            $table->text('divice')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
