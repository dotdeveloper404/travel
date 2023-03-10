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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_name');
            $table->string('slug')->unique();
            $table->string('tour_type');
            $table->string('product_type');
            $table->integer('nights');
            $table->integer('days');
            $table->text('itenary')->nullable();
            $table->text('features')->nullable();
            $table->float('tour_price');
            $table->float('discount')->default(0);
            $table->float('net_amount');
            $table->text('description')->nullable();
            $table->boolean('is_transport_included')->nullable()->default(0);
            $table->text('acommodation')->nullable();
            $table->boolean('is_acommodation_included')->nullable()->default(0);
            $table->text('guide')->nullable();
            $table->boolean('is_guide_included')->nullable()->default(0);
            $table->text('additional_services')->nullable();
            $table->boolean('is_additional_services_included')->nullable()->default(0);
            $table->boolean('is_visa_included')->nullable()->default(0);
            $table->text('visa')->nullable();
            $table->boolean('is_meals_included')->nullable()->default(0);
            $table->text('meals')->nullable();
            $table->boolean('is_optional_included')->nullable()->default(0);
            $table->text('optional')->nullable();
            $table->boolean('is_insurance_included')->nullable()->default(0);
            $table->text('insurance')->nullable();
            $table->boolean('is_flights_included')->nullable()->default(0);
            $table->text('flights')->nullable();
            $table->text('more_information')->nullable();
            $table->json('city')->nullable();
            $table->string('seasonality')->nullable();
            $table->date('traveling_date_start');
            $table->date('traveling_date_end');
            $table->string('featured_image')->nullable();
            $table->text('location_map')->nullable();
            $table->text('faqs')->nullable();
            $table->integer('stars')->nullable();
            $table->integer('reviews')->nullable();
            $table->boolean('status')->default(1);
            $table->text('destinations')->nullable();
            $table->json('languages')->nullable();
            $table->boolean('reomended')->nullable();
            $table->string('duration')->nullable();

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
        Schema::dropIfExists('tours');
    }
};
