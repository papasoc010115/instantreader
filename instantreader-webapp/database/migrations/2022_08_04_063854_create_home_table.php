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
            $table->string('page_title', 60)->default('');
            $table->string('page_desc', 155)->default('');
            $table->string('page_keywords', 155)->default('');
            $table->string('page_author', 60)->default('');

            // Section 1: IR Welcome Screen
            $table->string('welcome_title');
            $table->string('welcome_statement');
            $table->string('welcome_image');

            // Section 2: Highlight Video
            $table->string('highlight_title1');
            $table->string('highlight_title2');
            $table->string('highlight_para');
            $table->string('highlight_video');

            // Section 3: Live Parent Orientation
            $table->string('orientation_title');
            $table->string('orientation_para');
            $table->string('orientation_images');

            // Section 4: Teacher Vicki & Likha
            $table->string('vicki_likha_title');
            $table->string('vicki_para');
            $table->string('vicki_image');
            $table->string('likha_para');
            $table->string('likha_image');

            // Section 5: Area Jurisdictions
            $table->string('jurisdictions_title');
            $table->string('jurisdictions_para');

            // Section 6: Testimonies
            $table->string('testimonies_title');
            $table->string('testimonies_para');
            $table->string('testimonies_images');

            // Section 7: IR Kids Club
            $table->string('kids_club_title');
            $table->string('kids_club_para');
            $table->string('kids_club_images');

            // Section 8: Enroll Now
            $table->string('enroll_title');
            $table->string('enroll_para');
            $table->string('enroll_image');
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
                'welcome_title' => '',
                'welcome_statement' => '',
                'welcome_image' => '',

                // Section 2: Highlight Video
                'highlight_title1' => '',
                'highlight_title2' => '',
                'highlight_para' => '',
                'highlight_video' => '',

                // Section 3: Live Parent Orientation
                'orientation_title' => '',
                'orientation_para' => '',
                'orientation_images' => '',

                // Section 4: Teacher Vicki & Likha
                'vicki_likha_title' => '',
                'vicki_para' => '',
                'vicki_image' => '',
                'likha_para' => '',
                'likha_image' => '',

                // Section 5: Area Jurisdictions
                'jurisdictions_title' => '',
                'jurisdictions_para' => '',

                // Section 6: Testimonies
                'testimonies_title' => '',
                'testimonies_para' => '',
                'testimonies_images' => '',

                // Section 7: IR Kids Club
                'kids_club_title' => '',
                'kids_club_para' => '',
                'kids_club_images' => '',

                // Section 8: Enroll Now
                'enroll_title' => '',
                'enroll_para' => '',
                'enroll_image' => '',
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
