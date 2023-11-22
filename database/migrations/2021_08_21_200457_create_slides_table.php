<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('url')->nullable();
            $table->string('external_link')->nullable();
            $table->string('image');
            $table->string('parallax_background')->nullable();
            $table->string('video')->nullable();
            $table->string('youtube_video_id')->nullable();
            $table->string('caption_position')->default('none');
            $table->string('bg_filter_activate')->nullable();
            $table->string('bg_filter_color')->nullable();
            $table->string('filter_visibility')->nullable();
            $table->string('caption_text_color')->nullable();
            $table->string('caption_animation')->default('none');
            $table->text('slide_sections_en')->nullable();
            $table->text('slide_sections_dh')->nullable();
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
        Schema::dropIfExists('slides');
    }
}
