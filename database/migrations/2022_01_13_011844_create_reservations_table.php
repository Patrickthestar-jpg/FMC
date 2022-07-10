<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('contact');
            $table->string('email');
            $table->string('event_type');
            $table->date('event_date');
            $table->string('package')->nullable();
            $table->string('persons');
            $table->string('message');
            $table->boolean('isConfirm')->default(0);
            $table->boolean('isRefused')->default(0);
            $table->boolean('isCustomize')->default(0);
            $table->boolean('isFinish')->default(0);
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
        Schema::dropIfExists('pending_reservations');
    }
}
