<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('student_id')->unique();
            $table->string('firstname');
            $table->string('middlenames')->nullable();
            $table->string('lastname');
            $table->string('sex');
            $table->string('email')->unique();
            $table->string('mobile');
            $table->string('address');
            $table->foreignId('classroom_id')->references('id')->on('classrooms');
            $table->foreignId('student_type_id')->references('id')->on('student_types');
            $table->foreignId('hostel_id')->references('id')->on('hostels');
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
        Schema::dropIfExists('students');
    }
}
