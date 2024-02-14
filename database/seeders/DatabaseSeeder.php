<?php

namespace Database\Seeders;
use Database\Factories\UserFactory;
use Database\Factories\TrainingInfoFactory;
use Database\Factories\SurveyInfoFactory;
use Database\Factories\EmploymentTypeFactory;
use Database\Factories\EmploymentStatusFactory;
use Database\Factories\AcademyFactory;
use Database\Factories\CohortFactory;
use Database\Factories\FundFactory;



use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\TrainingInfo::factory(10)->create();
        \App\Models\SurveyInfo::factory(10)->create();
        \App\Models\EmploymentType::factory(10)->create();
        \App\Models\EmploymentStatus::factory(10)->create();
        \App\Models\Academy::factory(10)->create();
        \App\Models\Cohort::factory(10)->create();
        \App\Models\Fund::factory(10)->create();
       
    }
}
