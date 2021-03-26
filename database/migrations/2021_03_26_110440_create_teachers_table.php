<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('teacher_id')->unique();
            $table->string('firstname');
            $table->string('middlenames')->nullable();
            $table->string('lastname');
            $table->string('sex');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('address');
            //$table->string('password');
            //$table->string('created_by');
            //$table->string('authorised_by');
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
        Schema::dropIfExists('teachers');
    }
}
