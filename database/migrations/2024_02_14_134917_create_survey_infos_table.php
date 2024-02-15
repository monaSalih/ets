<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('survey_infos', function (Blueprint $table) {
            $table->id('survey_info_id');
            $table->string('name');
            $table->string('url');
            $table->unsignedBigInteger('training_id')->nullable();
            $table->string('response_link');
            $table->timestamps();
            // $table->foreign('training_info_id')->references('training_info_id')->on('training_info');
       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('survey_infos');
    }
}
