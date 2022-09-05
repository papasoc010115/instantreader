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
        Schema::create('additional_resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Metadata
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: Tips/Resources Selection Library
            $table->string('sect1_heading');
            $table->mediumText('sect1_para1');
            $table->mediumText('sect1_para2');
            $table->mediumText('sect1_para3');
            $table->string('sect1_image1');
            $table->string('sect1_image2');
            $table->string('sect1_image3');

            // Section 2: E-books/Blogs
            $table->string('sect2_heading1');
            $table->string('sect2_heading2');

            // Section 3: Videos
            $table->string('sect3_heading');
            $table->mediumText('sect3_para');
            $table->string('sect3_videos');

            // Section 4: Visuals
            $table->string('sect4_heading');
            $table->mediumText('sect4_para');
            $table->string('sect4_images');
        });
        
        // Insert empty values
        DB::table('additional_resources')->insert(
            array(
                // Metadata
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',

                // Section 1: Tips/Resources Selection Library
                'sect1_heading' => '',
                'sect1_para1' => '',
                'sect1_para2' => '',
                'sect1_para3' => '',
                'sect1_image1' => '',
                'sect1_image2' => '',
                'sect1_image3' => '',

                // Section 2: E-books/Blogs
                'sect2_heading1' => '',
                'sect2_heading2' => '',

                // Section 3: Videos
                'sect3_heading' => '',
                'sect3_para' => '',
                'sect3_videos' => '',

                // Section 4: Visuals
                'sect4_heading' => '',
                'sect4_para' => '',
                'sect4_images' => '',
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
        Schema::dropIfExists('additional_resources');
    }
};
