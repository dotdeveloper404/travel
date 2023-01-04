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
            $table->string('slug')->unique();
            $table->enum('type',['none','featured','top_rated','best_seller'])->default('none');
            $table->text('description');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->integer('stars');
            $table->string('contact_no_1');
            $table->string('contact_no_2')->nullable();
            $table->string('map_location')->nullable();
            $table->text('property_info')->nullable();
            $table->text('main_amenities')->nullable();
            $table->text('about_this_area')->nullable();
            $table->text('about_this_property')->nullable();
            $table->text('at_a_glance')->nullable();
            $table->text('property_amenities')->nullable();
            $table->text('room_amenities')->nullable();
            $table->text('fees_and_policies')->nullable();
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
