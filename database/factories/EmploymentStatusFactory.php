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
            'employment_stuts_id' => $this->faker->numberBetween(1, 10), 
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
    
        ];
    }
}
