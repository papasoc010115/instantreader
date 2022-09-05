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
        Schema::create('kids_club', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Metadata
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: Welcome Screen
            $table->string('sect1_heading');
            $table->mediumText('sect1_para');
            $table->string('sect1_image');
    
            // Section 2: About Instant Readrer Kids Club
            $table->string('sect2_heading');
            $table->mediumText('sect2_para1');
            $table->mediumText('sect2_para2');
            $table->string('sect2_image1');
            $table->string('sect2_image2');
            $table->string('sect2_image3');
            $table->string('sect2_video');
    
            // Section 3: Coming Soon/Register Now
            $table->string('sect3_heading');
            $table->mediumText('sect3_para');
            $table->string('sect3_image');
        });

        // Insert empty values
        DB::table('kids_club')->insert(
            array(
                // Metadata
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',

                // Section 1: Welcome Screen
                'sect1_heading' => '',
                'sect1_para' => '',
                'sect1_image' => '',
        
                // Section 2: About Instant Readrer Kids Club
                'sect2_heading' => '',
                'sect2_para1' => '',
                'sect2_para2' => '',
                'sect2_image1' => '',
                'sect2_image2' => '',
                'sect2_image3' => '',
                'sect2_video' => '',
        
                // Section 3: Coming Soon/Register Now
                'sect3_heading' => '',
                'sect3_para' => '',
                'sect3_image' => '',
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
        Schema::dropIfExists('kids_club');
    }
};
