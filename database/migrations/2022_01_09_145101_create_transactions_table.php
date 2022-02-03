<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('student_id');
            $table->integer('session_id');
            $table->integer('semester_id');
            $table->string('details');
            $table->integer('debit')->nullable();
            $table->integer('credit')->nullable();
            $table->integer('payslip')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('is_delete')->nullable();
            $table->string('balance');
            $table->string('online_tnx')->nullable();
            $table->string('ex1')->nullable();

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
        Schema::dropIfExists('transactions');
    }
}
