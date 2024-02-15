<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{

   
   
    /**
     *  @var string
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password123'),
            'training_info_id' => $this->faker->numberBetween(1, 10), // Adjust as needed
            'is_newsletter' => $this->faker->boolean,
            'provider_id' => $this->faker->uuid,
            'email_verification' => $this->faker->dateTime(),
            'is_email_verified' => $this->faker->boolean,
            'mobile' => $this->faker->phoneNumber,
            'mobile_verification' => $this->faker->dateTime(),
            'is_mobile_verified' => $this->faker->boolean,
            'nationality' => $this->faker->boolean,
            'country' => $this->faker->country,
            'passport_number' => $this->faker->optional()->numerify('#############'),
            'national_id' => $this->faker->optional()->randomNumber(9),
            'birthdate' => $this->faker->date(),
            'first_name' => $this->faker->firstName,
            'second_name' => $this->faker->optional()->firstName,
            'third_name' => $this->faker->optional()->firstName,
            'last_name' => $this->faker->lastName,
            'ar_first_name' => $this->faker->optional()->firstName,
            'ar_second_name' => $this->faker->optional()->firstName,
            'ar_third_name' => $this->faker->optional()->firstName,
            'ar_last_name' => $this->faker->optional()->lastName,
            'gender' => $this->faker->randomElement(['male', 'female']),
            'martial_status' => $this->faker->randomElement(['single', 'married']),
            'remember_token' => Str::random(10),
            'education' => $this->faker->sentence,
            'educational_status' => $this->faker->randomElement(['student', 'graduate']),
            'field' => $this->faker->word,
            'educational_background' => $this->faker->sentence,
            'ar_writing' => $this->faker->optional()->sentence,
            'ar_speaking' => $this->faker->optional()->sentence,
            'en_writing' => $this->faker->optional()->sentence,
            'en_speaking' => $this->faker->optional()->sentence,
            'city' => $this->faker->city,
            'address' => $this->faker->address,
            // 'relative_mobile_1' =>  $this->faker->optional()->phoneNumber->randomNumber(9),
            'relative_relation_1' => $this->faker->word,
            'fullName_1' => $this->faker->name,
            //'relative_mobile_2' => $this->faker->phoneNumber,
            'relative_relation_2' => $this->faker->word,
            'fullName_2' => $this->faker->optional()->name,
            'is_committed' => $this->faker->boolean,
            'is_submitted' => $this->faker->boolean,
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'result_1' => $this->faker->sentence,
            'academy_location' => $this->faker->city,
            'id_img' => $this->faker->imageUrl(),
            'personal_img' => $this->faker->imageUrl(),
            'vaccination_img' => $this->faker->imageUrl(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
