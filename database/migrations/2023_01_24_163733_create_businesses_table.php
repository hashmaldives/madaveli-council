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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('slug');
            $table->boolean('maps')->default(0);
            $table->string('image')->nullable();
            $table->string('title_en')->nullable();
            $table->text('content_en')->nullable();
            $table->string('title_dh')->nullable();
            $table->text('content_dh')->nullable();
            $table->text('extras')->nullable();
            $table->boolean('published')->default(0);
            $table->string('published_at')->nullable();
            $table->text('tags_en')->nullable();
            $table->text('tags_dh')->nullable();
            $table->string('map_height')->nullable();
            $table->string('map_zoom')->nullable();
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
};
