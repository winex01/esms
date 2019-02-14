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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('student_no');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('suffix_name');
            $table->date('birth_date');	
            $table->string('birth_place');
            $table->string('province');
            $table->string('town');
            $table->string('barangay');
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
