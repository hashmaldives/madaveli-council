<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('startdate');
            $table->string('enddate');
            $table->string('image');
            $table->string('venue_en');
            $table->string('venue_dh');
            $table->string('title_en');
            $table->string('title_dh');
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
        Schema::dropIfExists('events');
    }
}
