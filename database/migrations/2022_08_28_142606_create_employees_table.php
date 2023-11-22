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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->boolean('publish')->default(0);
            $table->string('image')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_dh')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_dh')->nullable();
            $table->text('short_description_en')->nullable();
            $table->text('short_description_dh')->nullable();
            $table->foreignId('gender_id');
            $table->boolean('shortdesc')->default(0);
            $table->string('facebook_handler')->nullable();
            $table->string('twitter_handler')->nullable();
            $table->string('instagram_handler')->nullable();
            $table->string('linkedin_handler')->nullable();
            $table->string('youtube_handler')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
