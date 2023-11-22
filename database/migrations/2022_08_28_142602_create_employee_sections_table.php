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
        Schema::create('employee_sections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title_en')->nullable();
            $table->string('title_dh')->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('link_to_employee_profile')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_sections');
    }
};
