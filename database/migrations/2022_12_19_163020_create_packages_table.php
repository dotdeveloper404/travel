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
            $table->string('slug')->unique();
            $table->string('package_type');
            $table->string('product_type');
            $table->integer('nights');
            $table->integer('days');
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
            $table->string('featured_image')->nullable();
            $table->text('location_map')->nullable();
            $table->text('faqs')->nullable();
            $table->boolean('status')->default(1);

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
