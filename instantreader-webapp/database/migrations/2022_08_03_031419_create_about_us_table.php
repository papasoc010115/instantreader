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
