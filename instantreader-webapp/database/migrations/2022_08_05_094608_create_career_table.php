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
        Schema::create('career', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('page_title', 60)->default('');
            $table->string('page_desc', 155)->default('');
            $table->string('page_keywords', 155)->default('');
            $table->string('page_author', 60)->default('');
            $table->string('sect1_heading')->default('');
            $table->string('sect1_title1')->default('');
            $table->string('sect1_para1', 500)->default('');
            $table->string('sect1_image1')->default('');
            $table->string('sect1_title2')->default('');
            $table->string('sect1_para2', 500)->default('');
            $table->string('sect1_image2')->default('');
        });
        
        // Insert empty values
        DB::table('career')->insert(
            array(
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',
                'sect1_heading' => '',
                'sect1_title1' => '',
                'sect1_para1' => '',
                'sect1_image1' => '',
                'sect1_title2' => '',
                'sect1_para2' => '',
                'sect1_image2' => ''
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
        Schema::dropIfExists('career');
    }
};
