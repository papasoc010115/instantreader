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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->string('founder_page_title', 60);
            $table->string('founder_page_desc', 155);
            $table->string('founder_page_keywords');
            $table->string('founder_page_author', 60);
            $table->string('founder_teacher_vicki_title');
            $table->string('founder_teacher_vicki_para', 600);
            $table->string('founder_teacher_vicki_image');
            $table->string('founder_ir_history_title');
            $table->string('founder_ir_history_para1');
            $table->string('founder_ir_history_para2');
            $table->string('founder_ir_history_image1');
            $table->string('founder_ir_history_image2');
            $table->string('founder_ir_history_video');
            $table->string('founder_ir_vision_title');
            $table->string('founder_ir_vision_para');
            $table->string('founder_ir_vision_image');
            $table->string('founder_ir_mission_title');
            $table->string('founder_ir_mission_para');
            $table->string('founder_ir_mission_image');
            $table->string('founder_virac_para1');
            $table->string('founder_virac_para2');
            $table->string('founder_virac_video');

            $table->string('testimonials_page_title', 60);
            $table->string('testimonials_page_desc', 155);
            $table->string('testimonials_page_keywords');
            $table->string('testimonials_page_author', 60);
            $table->string('parental_concerns_para1');
            $table->string('parental_concerns_para2');
            $table->string('parental_concerns_para3');
            $table->string('parental_concerns_para4');
            $table->string('parental_concerns_image1');
            $table->string('parental_concerns_image2');
            $table->string('parental_concerns_image3');
            $table->string('parental_concerns_image4');
            $table->string('parental_goals_para1');
            $table->string('parental_goals_para2');
            $table->string('parental_goals_para3');
            $table->string('parental_goals_para4');
            $table->string('parental_goals_image1');
            $table->string('parental_goals_image2');
            $table->string('parental_goals_image3');
            $table->string('parental_goals_image4');
            $table->string('testimonials_para1');
            $table->string('testimonials_para2');
            $table->string('testimonials_para3');
            $table->string('testimonials_para4');
        });

        // Insert empty values
        DB::table('about_us')->insert(
            array(
                'founder_page_title' => '',
                'founder_page_desc' => '',
                'founder_page_keywords' => '',
                'founder_page_author' => '',
                'founder_teacher_vicki_title' => '',
                'founder_teacher_vicki_para' => '',
                'founder_teacher_vicki_image' => '',
                'founder_ir_history_title' => '',
                'founder_ir_history_para1' => '',
                'founder_ir_history_para2' => '',
                'founder_ir_history_image1' => '',
                'founder_ir_history_image2' => '',
                'founder_ir_history_video' => '',
                'founder_ir_vision_title' => '',
                'founder_ir_vision_para' => '',
                'founder_ir_vision_image' => '',
                'founder_ir_mission_title' => '',
                'founder_ir_mission_para' => '',
                'founder_ir_mission_image' => '',
                'founder_virac_para1' => '',
                'founder_virac_para2' => '',
                'founder_virac_video' => '',
                
                'testimonials_page_title' => '',
                'testimonials_page_desc' => '',
                'testimonials_page_keywords' => '',
                'testimonials_page_author' => '',
                'parental_concerns_para1' => '',
                'parental_concerns_para2' => '',
                'parental_concerns_para3' => '',
                'parental_concerns_para4' => '',
                'parental_concerns_image1' => '',
                'parental_concerns_image2' => '',
                'parental_concerns_image3' => '',
                'parental_concerns_image4' => '',
                'parental_goals_para1' => '',
                'parental_goals_para2' => '',
                'parental_goals_para3' => '',
                'parental_goals_para4' => '',
                'parental_goals_image1' => '',
                'parental_goals_image2' => '',
                'parental_goals_image3' => '',
                'parental_goals_image4' => '',
                'testimonials_para1' => '',
                'testimonials_para2' => '',
                'testimonials_para3' => '',
                'testimonials_para4' => ''

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
        Schema::dropIfExists('about_us');
    }
};
