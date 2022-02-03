<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlinepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('onlinepayments', function (Blueprint $table) {
            $table->id();

            $table->integer('student_id');
            $table->integer('exam_roll');
            $table->integer('session_id');
            $table->integer('semester_id');
            $table->string('details');
            $table->integer('credit')->nullable();
            $table->String('bank_ac')->nullable();
            $table->String('bank_tnxid')->nullable();
            $table->integer('contact')->nullable();
          
            $table->integer('state')->nullable();
           

            

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
        Schema::dropIfExists('onlinepayments');
    }
}
