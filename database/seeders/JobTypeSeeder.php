<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use App\Models\JobType;
use Illuminate\Database\Seeder;

class JobTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $jobTypes = [
            [
                'category' => 'Accountant',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Economist',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Boarding Master',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Cook',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Matron',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Senior Master',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Senior Mistress',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Head',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Deputy Head',
                'description' => $faker->sentence(10, false),
            ],
            [
                'category' => 'Grounds Master',
                'description' => $faker->sentence(10, false),
            ],
        ];

        foreach ($jobTypes as $jobType) {
            JobType::create($jobType);
        };
    }
}
