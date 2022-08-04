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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('consultation_page_title', 60)->default('');
            $table->string('consultation_page_desc', 155)->default('');
            $table->string('consultation_page_keywords')->default('');
            $table->string('consultation_page_author', 60)->default('');
            $table->string('consultation_sect1_heading')->default('');
            $table->string('consultation_sect1_para1', 600)->default('');
            $table->string('consultation_sect1_image1')->default('');
            $table->string('consultation_sect1_para2', 600)->default('');
            $table->string('consultation_sect1_image2')->default('');
            $table->string('consultation_sect2_heading')->default('');
            $table->string('consultation_sect2_para', 600)->default('');
            
            $table->string('career_page_title', 60)->default('');
            $table->string('career_page_desc', 155)->default('');
            $table->string('career_page_keywords')->default('');
            $table->string('career_page_author', 60)->default('');
            $table->string('career_sect1_heading')->default('');
            $table->string('career_sect1_title1')->default('');
            $table->string('career_sect1_para1', 600)->default('');
            $table->string('career_sect1_image1')->default('');
            $table->string('career_sect1_title2')->default('');
            $table->string('career_sect1_para2', 600)->default('');
            $table->string('career_sect1_image2')->default('');
        });
        
        // Insert empty values
        DB::table('contact_us')->insert(
            array(
                'consultation_page_title' => '',
                'consultation_page_desc' => '',
                'consultation_page_keywords' => '',
                'consultation_page_author' => '',
                'consultation_sect1_heading' => '',
                'consultation_sect1_para1' => '',
                'consultation_sect1_image1' => '',
                'consultation_sect1_para2' => '',
                'consultation_sect1_image2' => '',
                'consultation_sect2_heading' => '',
                'consultation_sect2_para' => '',
                
                'career_page_title' => '',
                'career_page_desc' => '',
                'career_page_keywords' => '',
                'career_page_author' => '',
                'career_sect1_heading' => '',
                'career_sect1_title1' => '',
                'career_sect1_para1' => '',
                'career_sect1_image1' => '',
                'career_sect1_title2' => '',
                'career_sect1_para2' => '',
                'career_sect1_image2' => ''

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
        Schema::dropIfExists('contact_us');
    }
};
