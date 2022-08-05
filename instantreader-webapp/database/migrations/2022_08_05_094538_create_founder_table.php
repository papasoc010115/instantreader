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
        Schema::create('founder', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);
        });

        // Insert empty values
        DB::table('founder')->insert(
            array(
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founder');
    }
};
