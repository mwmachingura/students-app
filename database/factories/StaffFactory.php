<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

class StaffFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Staff::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'staff_id' => $this->faker->unique()->numberBetween(3000, 5000),
            'firstname' => $this->faker->firstName,
            'middlenames' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'sex' => $this->faker->randomElement($array = array ('M','F')),
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
