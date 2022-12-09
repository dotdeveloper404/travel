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
        Schema::create('transport', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('description')->nullable();
            $table->string('model')->nullable();
            $table->string('made_year')->nullable();
            $table->string('mileage')->nullable();
            $table->string('version')->nullable();
            $table->string('horsepower')->nullable();
            $table->string('condition')->nullable();
            $table->string('amenities')->nullable();
            $table->string('luggage')->nullable();
            $table->string('status')->default('1');

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
        Schema::dropIfExists('transport');
    }
};
