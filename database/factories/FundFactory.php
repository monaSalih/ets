<?php

namespace Database\Factories;
use App\Models\Fund;

use Illuminate\Database\Eloquent\Factories\Factory;

class FundFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'training_info_id' => $this->faker->numberBetween(1, 100), // Adjust as needed
            // 'cohort_id' => $this->faker->numberBetween(1, 100),
            // 'academy_id' => $this->faker->numberBetween(1, 100),
            // 'fund_id' => $this->faker->numberBetween(1, 100), // Adjust as needed
            'fund_name' => $this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
