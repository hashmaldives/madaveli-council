<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title_en');
            $table->string('title_dh');
            $table->string('image');
            $table->string('type');
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_dh')->nullable();
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
        Schema::dropIfExists('galleries');
    }
}
