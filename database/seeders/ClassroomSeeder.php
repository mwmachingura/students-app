<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Form;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $classrooms = [
            [
                'class' => '1 A',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 B',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 C',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 D',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 A',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 B',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 C',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 D',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 A',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 B',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 C',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 D',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 A',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 B',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 C',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 D',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Sciences 1',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Sciences 2',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Commercial',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Arts',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Sciences 1',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Sciences 2',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Commercial',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Arts',
                'form_id' => Form::inRandomOrder()->first()->id,
                'description' => $faker->sentence(20, false),
            ],
        ];

        foreach($classrooms as $classroom) {
            Classroom::create($classroom);
        };
    }
}
