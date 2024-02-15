<?php

namespace Database\Factories;

use App\Models\EmploymentType;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => $this->faker->word,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
