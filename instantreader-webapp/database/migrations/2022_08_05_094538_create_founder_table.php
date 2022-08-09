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
            
            // Metadata
            $table->string('page_heading', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: Teacher Vicki
            $table->string('sect1_heading');
            $table->string('sect1_para');
            $table->string('sect1_image');

            // Section 2: IR History
            $table->string('sect2_heading');
            $table->string('sect2_para1');
            $table->string('sect2_para2');
            $table->string('sect2_image1');
            $table->string('sect2_image2');
            $table->string('sect2_video');

            // Section 3: Vision
            $table->string('sect3_heading');
            $table->string('sect3_para');
            $table->string('sect3_image');

            // Section 4: Mission
            $table->string('sect4_heading');
            $table->string('sect4_para');
            $table->string('sect4_image');

            // Section 5: Project VIRAC
            $table->string('sect5_heading');
            $table->string('sect5_para1');
            $table->string('sect5_para2');
            $table->string('sect5_video');
            $table->string('sect5_images');
        });

        // Insert empty values
        DB::table('founder')->insert(
            array(
                'page_heading' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',
                'sect1_heading' => '',
                'sect1_para' => '',
                'sect1_image' => '',
                'sect2_heading' => '',
                'sect2_para1' => '',
                'sect2_para2' => '',
                'sect2_image1' => '',
                'sect2_image2' => '',
                'sect2_video' => '',
                'sect3_heading' => '',
                'sect3_para' => '',
                'sect3_image' => '',
                'sect4_heading' => '',
                'sect4_para' => '',
                'sect4_image' => '',
                'sect5_heading'=>'',
                'sect5_para1' => '',
                'sect5_para2' => '',
                'sect5_video' => '',
                'sect5_images' => '',
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
