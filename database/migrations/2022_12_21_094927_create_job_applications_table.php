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
        Schema::create('job_applications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('job_opportunity_id')->constrained('job_opportunities')->nullable();
            // $table->string('job_listing')->nullable();
            $table->string('name')->nullable();
            $table->string('gender')->nullable();
            $table->string('permanent_address')->nullable();
            $table->string('current_address')->nullable();
            $table->string('nic')->nullable();
            $table->string('dob')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->json('gce_al_results')->nullable();
            $table->json('gce_ol_results')->nullable();
            $table->json('higher_education_certificates')->nullable();
            $table->json('professional_trainings')->nullable();
            $table->json('employment_history')->nullable();
            $table->json('service_bonds')->nullable();
            $table->string('application_form')->nullable();
            $table->string('applicant_cv')->nullable();
            $table->string('national_id_card')->nullable();
            $table->string('gce_ol_al_certificates')->nullable();
            $table->string('college_degree_diploma_masters')->nullable();
            $table->string('short_training_certificates')->nullable();
            $table->string('employment_reference_letters')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_applications');
    }
};
