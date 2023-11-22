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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image')->nullable();
            $table->foreignId('project_category_id')->nullable()->constrained();
            $table->foreignId('project_status_id')->nullable()->constrained();
            $table->string('project_completion_percentage')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('title_en')->nullable();
            $table->text('content_en')->nullable();
            $table->string('title_dh')->nullable();
            $table->text('content_dh')->nullable();
            $table->text('images')->nullable();
            $table->text('videos')->nullable();
            $table->text('extras')->nullable();
            $table->boolean('published')->default(0);
            $table->string('published_at')->nullable();
            $table->text('tags_en')->nullable();
            $table->text('tags_dh')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
