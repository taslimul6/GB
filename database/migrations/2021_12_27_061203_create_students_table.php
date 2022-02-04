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

            $table->integer('student_id');

            //academic
            $table->integer('batch');
            $table->integer('class_roll');
            $table->integer('exam_roll')->nullable();
            $table->integer('department_id');
            $table ->integer('user_id')->nullable();
            $table->string('email');
            $table->date('admission_date')->nullable();
            $table->string('ad_session')->nullable();

            //personal

            $table->string('full_name');
            $table->string('present_address')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('blood')->nullable();
            $table->string('dob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('fathers_name')->nullable();
            $table->string('fathers_contact')->nullable();
            $table->string('mothers_name')->nullable();
            $table->string('mothers_contact')->nullable();
            $table->string('emergency_c_name')->nullable();
            $table->string('emergency_number')->nullable();
            $table->string('emergency_address')->nullable();


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
