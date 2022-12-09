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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('contact_no_1');
            $table->string('contact_no_2')->nullable();
            $table->string('property_info')->nullable();
            $table->string('main_amenities')->nullable();
            $table->string('about_this_area')->nullable();
            $table->string('about_this_property')->nullable();
            $table->string('at_a_glance')->nullable();
            $table->string('property_amenities')->nullable();
            $table->string('room_amenities')->nullable();
            $table->tinyInteger('status')->default(1);

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
        Schema::dropIfExists('hotels');
    }
};
