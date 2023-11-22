<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('active')->nullable();
            $table->string('section_height')->nullable();
            $table->string('parallax')->nullable();
            $table->string('container')->nullable();
            $table->boolean('maps')->default(0);
            $table->string('map_id')->nullable();
            $table->string('background_image')->nullable();
            $table->string('bg_filter')->nullable();
            $table->string('filter_visibility')->nullable();
            $table->string('filter_bg')->nullable();
            $table->string('text_color')->nullable();
            $table->string('background_color')->nullable();
            $table->text('section_elements_en')->nullable();
            $table->text('section_elements_dh')->nullable();
            $table->integer('padding_top')->nullable();
            $table->integer('padding_bottom')->nullable();
            $table->integer('sort_order')->nullable();
            $table->boolean('published')->default(0);
            $table->string('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('home_page_sections');
    }
};
