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
        Schema::create('reading_programs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: All Programs
            $table->mediumText('sect1_para1');
            $table->mediumText('sect1_para2');
            $table->mediumText('sect1_para3');
            $table->mediumText('sect1_para4');
            $table->string('sect1_image1');
            $table->string('sect1_image2');
            $table->string('sect1_image3');
            $table->string('sect1_image4');

            // Section 2: Basic Program
            $table->string('sect2_heading');
            $table->mediumText('sect2_para1');
            $table->mediumText('sect2_para2');
            $table->mediumText('sect2_para3');
            $table->string('sect2_image1');
            $table->string('sect2_image2');
            $table->string('sect2_image3');

            // Section 3: Advanced Program
            $table->string('sect3_heading');
            $table->mediumText('sect3_para1');
            $table->mediumText('sect3_para2');
            $table->mediumText('sect3_para3');
            $table->string('sect3_image1');
            $table->string('sect3_image2');
            $table->string('sect3_image3');

            // Section 4: Mastery Program
            $table->string('sect4_heading');
            $table->mediumText('sect4_para1');
            $table->mediumText('sect4_para2');
            $table->mediumText('sect4_para3');
            $table->string('sect4_image1');
            $table->string('sect4_image2');
            $table->string('sect4_image3');

            // Section 5: Compass Program
            $table->string('sect5_heading');
            $table->mediumText('sect5_para1');
            $table->mediumText('sect5_para2');
            $table->mediumText('sect5_para3');
            $table->mediumText('sect5_para4');
            $table->mediumText('sect5_para5');
            $table->mediumText('sect5_para6');
            $table->string('sect5_image1');
            $table->string('sect5_image2');
            $table->string('sect5_image3');
            $table->string('sect5_image4');
            $table->string('sect5_image5');
            $table->string('sect5_video');
        });

        // Insert empty values
        DB::table('reading_programs')->insert(
            array(
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',

                // Section 1: All Programs
                'sect1_para1' => '',
                'sect1_para2' => '',
                'sect1_para3' => '',
                'sect1_para4' => '',
                'sect1_image1' => '',
                'sect1_image2' => '',
                'sect1_image3' => '',
                'sect1_image4' => '',
    
                // Section 2: Basic Program
                'sect2_heading' => '',
                'sect2_para1' => '',
                'sect2_para2' => '',
                'sect2_para3' => '',
                'sect2_image1' => '',
                'sect2_image2' => '',
                'sect2_image3' => '',
    
                // Section 3: Advanced Program
                'sect3_heading' => '',
                'sect3_para1' => '',
                'sect3_para2' => '',
                'sect3_para3' => '',
                'sect3_image1' => '',
                'sect3_image2' => '',
                'sect3_image3' => '',
    
                // Section 4: Mastery Program
                'sect4_heading' => '',
                'sect4_para1' => '',
                'sect4_para2' => '',
                'sect4_para3' => '',
                'sect4_image1' => '',
                'sect4_image2' => '',
                'sect4_image3' => '',
    
                // Section 5: Compass Program
                'sect5_heading' => '',
                'sect5_para1' => '',
                'sect5_para2' => '',
                'sect5_para3' => '',
                'sect5_para4' => '',
                'sect5_para5' => '',
                'sect5_para6' => '',
                'sect5_image1' => '',
                'sect5_image2' => '',
                'sect5_image3' => '',
                'sect5_image4' => '',
                'sect5_image5' => '',
                'sect5_video' => '',
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
        Schema::dropIfExists('reading_programs');
    }
};
