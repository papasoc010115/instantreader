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
            $table->string('parental_concerns_title');
            $table->string('parental_concerns_para1');
            $table->string('parental_concerns_para2');
            $table->string('parental_concerns_para3');
            $table->string('parental_concerns_para4');
            $table->string('parental_concerns_image1');
            $table->string('parental_concerns_image2');
            $table->string('parental_concerns_image3');
            $table->string('parental_concerns_image4');

            // Section 2: Parental Goals
            $table->string('parental_goals_title');
            $table->string('parental_goals_para1');
            $table->string('parental_goals_para2');
            $table->string('parental_goals_para3');
            $table->string('parental_goals_para4');
            $table->string('parental_goals_image1');
            $table->string('parental_goals_image2');
            $table->string('parental_goals_image3');
            $table->string('parental_goals_image4');

            // Section 3: Testimonials Gallery
            $table->string('testimonials_title');
            $table->string('testimonials_para1');
            $table->string('testimonials_para2');
            $table->string('testimonials_para3');
            $table->string('testimonials_para4');
            $table->string('testimonials_images');
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
                'parental_concerns_title' => '',
                'parental_concerns_para1' => '',
                'parental_concerns_para2' => '',
                'parental_concerns_para3' => '',
                'parental_concerns_para4' => '',
                'parental_concerns_image1' => '',
                'parental_concerns_image2' => '',
                'parental_concerns_image3' => '',
                'parental_concerns_image4' => '',

                // Section 2: Parental Goals
                'parental_goals_title' => '',
                'parental_goals_para1' => '',
                'parental_goals_para2' => '',
                'parental_goals_para3' => '',
                'parental_goals_para4' => '',
                'parental_goals_image1' => '',
                'parental_goals_image2' => '',
                'parental_goals_image3' => '',
                'parental_goals_image4' => '',

                // Section 3: Testimonials Gallery
                'testimonials_title' => '',
                'testimonials_para1' => '',
                'testimonials_para2' => '',
                'testimonials_para3' => '',
                'testimonials_para4' => '',
                'testimonials_images' => '',
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
