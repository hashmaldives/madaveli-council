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
        Schema::create('job_opportunities', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title_en')->nullable();
            $table->string('title_dh')->nullable();
            $table->string('job_title')->nullable();
            $table->string('number')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('living_allowance')->nullable();
            $table->string('service_allowance')->nullable();
            $table->string('other_allowance')->nullable();
            $table->string('open_vacancies')->nullable();
            $table->string('position_rank')->nullable();
            $table->string('position_classification')->nullable();
            $table->string('office_en')->nullable();
            $table->string('section_en')->nullable();
            $table->string('office_dh')->nullable();
            $table->string('section_dh')->nullable();
            $table->string('main_pdf')->nullable();
            $table->string('application_deadline')->nullable();
            $table->text('attachment')->nullable();
            $table->text('content_en')->nullable();
            $table->text('content_dh')->nullable();
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
        Schema::dropIfExists('job_opportunities');
    }
};
