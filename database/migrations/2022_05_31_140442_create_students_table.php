<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('students')){

        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('studentID')->unique();
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('password');
            $table->string('repeat_password');
            $table->string('address');
            $table->date('dob');
            $table->boolean('status');
            $table->bigInteger('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments');
            $table->timestamps();
        });
      
    }}

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
