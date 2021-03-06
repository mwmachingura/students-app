<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Form;
use Illuminate\Database\Eloquent\Factories\Factory;


class ClassroomFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Classroom::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'class' => strtoupper($this->faker->unique()->bothify('?-#', 'letters = A-Z')),
            'form_id' => Form::inRandomOrder()->first()->id,
            'description' => $this->faker->sentence(20, false),     
        ];
    }
}
