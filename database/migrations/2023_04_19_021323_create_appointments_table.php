<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->integer('Client_id');
            $table->string('Name');
            $table->string('Phone_number');
            $table->string('Email');
            $table->date('Appt_date');
            $table->time('Appt_time');
            $table->string('Mode_of_consultation');
            $table->integer('T_id');
            $table->string('Therapist');
            $table->string('Status');
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
        Schema::dropIfExists('appointments');
      
    }
};
