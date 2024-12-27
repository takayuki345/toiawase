<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 5),
            'first_name' => $this->faker->lastName,
            'last_name' => $this->faker->firstName,
            'gender_id' => $this->faker->numberBetween(1, 3),
            'email' => $this->faker->safeEmail,
            'tel' => $this->faker->numberBetween(10000000000, 99999999999),
            'address' => $this->faker->address,
            'building' => $this->faker->word,
            'detail' => $this->faker->text,
            'created_at' => $this->faker->dateTimeBetween($startDate = '-2 week', $endDate = 'now'),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-2 week', $endDate = 'now')
        ];
    }
}
