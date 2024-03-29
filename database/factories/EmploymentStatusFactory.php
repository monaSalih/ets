<?php

namespace Database\Factories;

use App\Models\EmploymentStatus;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmploymentStatusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
    
        ];
    }
}
