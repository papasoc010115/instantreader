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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Metadata
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);
            
            // Section 1: Parental Concerns
            $table->string('sect1_heading');
            $table->mediumText('sect1_para1');
            $table->mediumText('sect1_para2');
            $table->mediumText('sect1_para3');
            $table->mediumText('sect1_para4');
            $table->string('sect1_image1');
            $table->string('sect1_image2');
            $table->string('sect1_image3');
            $table->string('sect1_image4');

            // Section 2: Parental Goals
            $table->string('sect2_heading');
            $table->mediumText('sect2_para1');
            $table->mediumText('sect2_para2');
            $table->mediumText('sect2_para3');
            $table->mediumText('sect2_para4');
            $table->string('sect2_image1');
            $table->string('sect2_image2');
            $table->string('sect2_image3');
            $table->string('sect2_image4');

            // Section 3: Testimonials Gallery
            $table->string('sect3_heading');
            $table->mediumText('sect3_para1');
            $table->mediumText('sect3_para2');
            $table->mediumText('sect3_para3');
            $table->mediumText('sect3_para4');
            $table->string('sect3_images');
        });

        // Insert empty values
        DB::table('testimonials')->insert(
            array(
                // Metadata
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',
                
                // Section 1: Parental Concerns
                'sect1_heading' => '',
                'sect1_para1' => '',
                'sect1_para2' => '',
                'sect1_para3' => '',
                'sect1_para4' => '',
                'sect1_image1' => '',
                'sect1_image2' => '',
                'sect1_image3' => '',
                'sect1_image4' => '',

                // Section 2: Parental Goals
                'sect2_heading' => '',
                'sect2_para1' => '',
                'sect2_para2' => '',
                'sect2_para3' => '',
                'sect2_para4' => '',
                'sect2_image1' => '',
                'sect2_image2' => '',
                'sect2_image3' => '',
                'sect2_image4' => '',

                // Section 3: Testimonials Gallery
                'sect3_heading' => '',
                'sect3_para1' => '',
                'sect3_para2' => '',
                'sect3_para3' => '',
                'sect3_para4' => '',
                'sect3_images' => '',
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
        Schema::dropIfExists('testimonials');
    }
};
