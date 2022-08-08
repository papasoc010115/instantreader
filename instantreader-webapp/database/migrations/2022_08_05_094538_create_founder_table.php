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
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            // Section 1: Teacher Vicki
            $table->string('teacher_vicki_title');
            $table->string('teacher_vicki_para');
            $table->string('teacher_vicki_image');

            // Section 2: IR History
            $table->string('ir_history_title');
            $table->string('ir_history_para1');
            $table->string('ir_history_para2');
            $table->string('ir_history_image1');
            $table->string('ir_history_image2');
            $table->string('ir_history_video');

            // Section 3: Vision
            $table->string('ir_vision_title');
            $table->string('ir_vision_para');
            $table->string('ir_vision_image');

            // Section 4: Mission
            $table->string('ir_mission_title');
            $table->string('ir_mission_para');
            $table->string('ir_mission_image');

            // Section 5: Project VIRAC
            $table->string('proj_virac_para1');
            $table->string('proj_virac_para2');
            $table->string('proj_virac_video');
            $table->string('proj_virac_images');
        });

        // Insert empty values
        DB::table('founder')->insert(
            array(
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',
                'teacher_vicki_title' => '',
                'teacher_vicki_para' => '',
                'teacher_vicki_image' => '',
                'ir_history_title' => '',
                'ir_history_para1' => '',
                'ir_history_para2' => '',
                'ir_history_image1' => '',
                'ir_history_image2' => '',
                'ir_history_video' => '',
                'ir_vision_title' => '',
                'ir_vision_para' => '',
                'ir_vision_image' => '',
                'ir_mission_title' => '',
                'ir_mission_para' => '',
                'ir_mission_image' => '',
                'proj_virac_para1' => '',
                'proj_virac_para2' => '',
                'proj_virac_video' => '',
                'proj_virac_images' => '',
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
