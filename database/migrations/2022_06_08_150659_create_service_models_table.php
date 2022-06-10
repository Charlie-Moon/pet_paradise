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
        Schema::create('service_models', function (Blueprint $table) {
            $table->id();
            $table->string('serviceTitle');
            $table->string('serviceBody')->nullable();
            $table->string('serviceExcerpt')->nullable();
            $table->string('serviceImage')->nullable();
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
        Schema::dropIfExists('service_models');
    }
};
