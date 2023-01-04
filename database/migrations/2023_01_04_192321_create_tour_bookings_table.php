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
        Schema::create('tour_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('agent_id')->nullable();
            $table->integer('booking_id'); 
            $table->string('booking_status')->default('pending');
            $table->string('name');
            $table->string('email');
            $table->string('cell');
            $table->string('phone');
            $table->string('departure_city');
            $table->date('departure_date');
            $table->integer('adults');
            $table->integer('child');
            $table->integer('infants');
            $table->string('contact_preference');
            $table->string('best_time_to_call');
            $table->text('comment');
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
        Schema::dropIfExists('tour_bookings');
    }
};
