<?php

namespace Database\Factories;
use App\Models\Cohort;
use Illuminate\Database\Eloquent\Factories\Factory;

class CohortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cohort_number' => $this->faker->numberBetween(1, 10), // Adjust as needed
            'training_type' => $this->faker->word,
            'technology' => $this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
