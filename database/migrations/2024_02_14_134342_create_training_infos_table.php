<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_infos', function (Blueprint $table) {
            $table->id('training_info_id');
            $table->string('cohort_id');
            $table->string('academy_id');
            $table->unsignedBigInteger('fund_id');
            $table->timestamps();

            // $table->foreign('cohort_id')->references('cohort_id')->on('cohort');
            // $table->foreign('academy_id')->references('academy_id')->on('academy');
            // $table->foreign('fund_id')->references('fund_id')->on('fund');
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_infos');
    }
}
