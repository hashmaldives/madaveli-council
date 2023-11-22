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
        Schema::create('employee_employee_section', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('employee_id')->nullable();
            $table->string('employee_section_id')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_dh')->nullable();
            $table->string('level')->nullable();
            $table->string('employment_start_date')->nullable();
            $table->string('employment_end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_employee_section');
    }
};
