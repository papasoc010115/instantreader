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
        Schema::create('attendees', function (Blueprint $table) {            
            $table->id();
            $table->timestamps();
            $table->string('email')->default('');
            $table->unsignedBigInteger('event_id');
            $table->foreign('event_id')->references('id')->on('event_schedules');
            $table->tinyInteger('payment_status')->default('0');
            $table->tinyInteger('has_attended')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendees');
    }
};
