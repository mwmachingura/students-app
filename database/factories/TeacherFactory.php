<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Teacher::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'teacher_id' => $this->faker->unique()->numberBetween(1000, 2000),
            'firstname' => $this->faker->firstName,
            'middlenames' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'sex' => $this->faker->randomElement($array = array ('M','F')),
            'email' => $this->faker->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
        ];
    }
}
