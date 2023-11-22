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
        Schema::create('dynamic_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title_en')->nullable();
            $table->string('slug')->nullable();
            $table->string('title_dh')->nullable();
            $table->string('template')->nullable();
            $table->string('image')->nullable();
            $table->foreignId('form_category_id')->constrained('form_categories')->nullable();
            $table->foreignId('form_type_id')->constrained('form_types')->nullable();
            $table->text('form_data')->nullable();
            $table->string('submit_btn_title_en')->nullable();
            $table->string('submit_btn_title_dh')->nullable();
            $table->text('notification_users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dynamic_forms');
    }
};
