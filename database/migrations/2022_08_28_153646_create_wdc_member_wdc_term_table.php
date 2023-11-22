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
        Schema::create('wdc_member_wdc_term', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->string('wdc_member_id')->nullable();
            $table->string('wdc_term_id')->nullable();
            $table->string('position_en')->nullable();
            $table->string('position_dh')->nullable();
            $table->string('level')->nullable();
            $table->string('term_start_date')->nullable();
            $table->string('term_end_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wdc_member_wdc_term');
    }
};
