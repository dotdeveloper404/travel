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
        Schema::create('cities', function (Blueprint $table) {
            $table->id()->primary()->autoIncrement();
            $table->integer('country_id');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('meta_title');
            $table->text('meta_description')->nullable();
            $table->text('content');
            $table->tinyInteger('top')->nullable()->default(0);
            $table->string('image')->nullable();
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
        Schema::dropIfExists('cities');
    }
};
