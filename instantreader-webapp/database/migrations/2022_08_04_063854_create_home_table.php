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
        Schema::create('home', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Metadata
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: IR Welcome Screen
            $table->string('sect1_heading');
            $table->string('sect1_para');
            $table->string('sect1_image');

            // Section 2: Highlight Video
            $table->string('sect2_heading1');
            $table->string('sect2_heading2');
            $table->mediumText('sect2_para');
            $table->string('sect2_video');

            // Section 3: Live Parent Orientation
            $table->string('sect3_heading1');
            $table->string('sect3_heading2');
            $table->mediumText('sect3_para');
            $table->string('sect3_image1');
            $table->string('sect3_image2');
            $table->string('sect3_image3');

            // Section 4: Teacher Vicki & Likha
            $table->string('sect4_heading');
            $table->string('sect4_position1');
            $table->mediumText('sect4_para1');
            $table->string('sect4_image1');
            $table->string('sect4_position2');
            $table->mediumText('sect4_para2');
            $table->string('sect4_image2');

            // Section 5: Area Jurisdictions
            $table->string('sect5_heading');
            $table->string('sect5_countries');
            $table->string('sect5_para');

            // Section 6: Testimonies
            $table->string('sect6_heading');
            $table->string('sect6_para');
            $table->string('sect6_images');

            // Section 7: IR Kids Club
            $table->string('sect7_heading');
            $table->string('sect7_para');
            $table->string('sect7_images');

            // Section 8: Enroll Now
            $table->string('sect8_heading');
            $table->string('sect8_para');
            $table->string('sect8_image');
        });
        
        // Insert empty values
        DB::table('home')->insert(
            array(
                // Metadata 
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',

                // Section 1: IR Welcome Screen
                'sect1_heading' => '',
                'sect1_para' => '',
                'sect1_image' => '',

                // Section 2: Highlight Video
                'sect2_heading1' => '',
                'sect2_heading2' => '',
                'sect2_para' => '',
                'sect2_video' => '',

                // Section 3: Live Parent Orientation
                'sect3_heading1' => '',
                'sect3_heading2' => '',
                'sect3_para' => '',
                'sect3_image1' => '',
                'sect3_image2' => '',
                'sect3_image3' => '',

                // Section 4: Teacher Vicki & Likha
                'sect4_heading' => '',
                'sect4_position1' => '',
                'sect4_para1' => '',
                'sect4_image1' => '',
                'sect4_position2' => '',
                'sect4_para2' => '',
                'sect4_image2' => '',

                // Section 5: Area Jurisdictions
                'sect5_heading' => '',
                'sect5_countries' => '',
                'sect5_para' => '',

                // Section 6: Testimonies
                'sect6_heading' => '',
                'sect6_para' => '',
                'sect6_images' => '',

                // Section 7: IR Kids Club
                'sect7_heading' => '',
                'sect7_para' => '',
                'sect7_images' => '',

                // Section 8: Enroll Now
                'sect8_heading' => '',
                'sect8_para' => '',
                'sect8_image' => '',
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
        Schema::dropIfExists('home');
    }
};
