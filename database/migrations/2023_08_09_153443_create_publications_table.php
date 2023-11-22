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
        Schema::create('publications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title_en');
            $table->string('title_dh');
            $table->string('number')->nullable();
            $table->string('main_pdf')->nullable();
            $table->text('attachment')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_dh')->nullable();
            $table->boolean('published')->default(0);
            $table->string('published_at')->nullable();
            $table->foreignId('publication_category_id')->constrained('publication_categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
};
