<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FinishedReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finished_reservation', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact');
            $table->string('email');
            $table->string('event_type');
            $table->date('event_date');
            $table->string('mode_payment');
            $table->string('refference')->nullable();

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
        Schema::dropIfExists('finished_reservation');
    }
}
