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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->string('package_type');
            $table->integer('nights');
            $table->integer('days');
            $table->string('package_hotel');
            $table->string('package_transport');
            $table->text('itenary')->nullable();
            $table->text('features')->nullable();
            $table->float('package_price');
            $table->float('discount')->default(0);
            $table->float('net_amount');
            $table->text('description')->nullable();
            $table->string('city')->nullable();
            $table->string('seasonality')->nullable();
            $table->date('traveling_date_start');
            $table->date('traveling_date_end');
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('packages');
    }
};
