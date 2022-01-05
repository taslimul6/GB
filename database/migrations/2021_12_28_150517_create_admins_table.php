<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->string('full_name');
            $table->string('present_address')->nullable();
            $table->string('permanent_address');
            $table->string('phone');
            $table->string('gender');
            $table->string('blood')->nullable();
            $table->string('nationality');
            $table->string('religion');
            $table->string('fathers_name');
            $table->string('fathers_contact')->nullable();
            $table->string('mothers_name');
            $table->string('mothers_contact')->nullable();
            $table->string('emergency_c_name');
            $table->string('emergency_number');
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
        Schema::dropIfExists('admins');
    }
}