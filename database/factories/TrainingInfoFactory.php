<?php

namespace Database\Factories;

use App\Models\TrainingInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrainingInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'cohort_id' => $this->faker->numberBetween(1, 100),
            // 'academy_id' => $this->faker->numberBetween(1, 100),
            // 'fund_id' => $this->faker->numberBetween(1, 10), // Adjust as needed
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
