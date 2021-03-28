<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Hostel;
use App\Models\Student;
use App\Models\StudentType;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student_id' => $this->faker->unique()->numberBetween(100000, 200000),
            'firstname' => $this->faker->firstName,
            'middlenames' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'sex' => $this->faker->randomElement($array = array ('M','F')),
            'email' => $this->faker->unique()->safeEmail,
            'mobile' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'classroom_id' => Classroom::inRandomOrder()->first()->id,
            'student_type_id' => StudentType::inRandomOrder()->first()->id,
            'hostel_id' => Hostel::inRandomOrder()->first()->id,
        ];
    }
}
