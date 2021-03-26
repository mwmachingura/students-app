<?php

namespace Database\Seeders;

use App\Models\Classroom;
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
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 B',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 C',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '1 D',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 A',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 B',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 C',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '2 D',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 A',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 B',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 C',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '3 D',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 A',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 B',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 C',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => '4 D',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Sciences 1',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Sciences 2',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Commercial',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Lower Six Arts',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Sciences 1',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Sciences 2',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Commercial',
                'description' => $faker->sentence(20, false),
            ],
            [
                'class' => 'Upper Six Arts',
                'description' => $faker->sentence(20, false),
            ],
        ];

        foreach($classrooms as $classroom) {
            Classroom::create($classroom);
        };
    }
}
