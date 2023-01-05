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
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->integer('agent_id')->nullable();
            $table->integer('package_id'); 
            $table->string('booking_status')->default('pending');
            $table->string('name');
            $table->string('email');
            $table->string('cell');
            $table->string('phone');
            $table->string('departure_city');
            $table->date('departure_date');
            $table->integer('adults');
            $table->integer('child')->nullable();
            $table->integer('infants')->nullable();
            $table->string('contact_preference')->nullable();
            $table->string('best_time_to_call')->nullable();
            $table->text('comment')->nullable();
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
        Schema::dropIfExists('package_bookings');
    }
};
