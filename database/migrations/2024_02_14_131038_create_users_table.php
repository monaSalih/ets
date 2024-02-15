<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->tinyInteger('training_info_id')->nullable();
            $table->string('is_newsletter');
            $table->string('provider_id')->nullable();
            $table->string('email_verification')->nullable();
            $table->tinyInteger('is_email_verified');
            $table->string('mobile')->nullable();
            $table->string('mobile_verification')->nullable();
            $table->tinyInteger('is_mobile_verified');
            $table->tinyInteger('nationality');
            $table->text('country');
            $table->string('passport_number')->nullable();
            $table->bigInteger('national_id')->nullable();
            $table->date('birthdate');$table->string('first_name');
            $table->string('second_name')->nullable();
            $table->string('third_name')->nullable();
            $table->string('last_name');
            $table->string('ar_first_name')->nullable();
            $table->string('ar_second_name')->nullable();
            $table->string('ar_third_name')->nullable();
            $table->string('ar_last_name')->nullable();
            $table->string('gender');
            $table->string('martial_status');
            $table->string('remember_token')->nullable();
            $table->string('education');
            $table->string('educational_status');
            $table->string('field');$table->string('educational_background');
            $table->string('ar_writing')->nullable();
            $table->string('ar_speaking')->nullable();
            $table->string('en_writing')->nullable();
            $table->string('en_speaking')->nullable();
            $table->string('city');
            $table->string('address');
            $table->bigInteger('relative_mobile_1')->default("4234324234");
            $table->string('relative_relation_1')->default("relative_relation_1");
            $table->string('fullName_1');
            $table->bigInteger('relative_mobile_2')->default("3242343242");
            $table->string('relative_relation_2');
            $table->string('fullName_2')->nullable();
            $table->string('is_committed');$table->tinyInteger('is_submitted');
            $table->string('status');$table->string('result_1');
            $table->string('academy_location');
            $table->string('id_img');
            $table->string('personal_img');
            $table->string('vaccination_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
