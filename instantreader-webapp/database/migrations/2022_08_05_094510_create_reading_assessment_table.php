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
        Schema::create('reading_assessment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Metadata
            $table->string('page_title', 60);
            $table->string('page_desc', 155);
            $table->string('page_keywords', 155);
            $table->string('page_author', 60);

            //Section 1: About the Online Reading Assessment
            $table->string('sect1_subheading');
            $table->string('sect1_heading');
            $table->mediumText('sect1_para');
            $table->string('sect1_image');
    
            //Section 2: Calendar
            $table->string('sect2_heading');
            $table->mediumText('sect2_para');
        });

        // Insert empty values
        DB::table('reading_assessment')->insert(
            array(
                // Metadata
                'page_title' => '',
                'page_desc' => '',
                'page_keywords' => '',
                'page_author' => '',

                //Section 1: About the Online Reading Assessment
                'sect1_subheading' => '',
                'sect1_heading' => '',
                'sect1_para' => '',
                'sect1_image' => '',
        
                //Section 2: Calendar
                'sect2_heading' => '',
                'sect2_para' => '',
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
        Schema::dropIfExists('reading_assessment');
    }
};
