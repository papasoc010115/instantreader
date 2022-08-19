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
        Schema::create('assessment_schedules', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Online Assessment Schedule Information
            $table->string('date');
            $table->string('start_time');
            $table->string('end_time');
            $table->integer('slots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessment_schedules');
    }
};
