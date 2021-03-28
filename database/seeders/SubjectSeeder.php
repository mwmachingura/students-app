<?php

namespace Database\Seeders;

use App\Models\Subject;
use App\Models\SubjectState;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $subjects = [
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Accounting',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Accounting',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Geography',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'English',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Commerce',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'History',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Mathematics',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Integrated Science',
                'form_id' => 1,
                'subject_state_id' => SubjectState::first()->id,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Agriculture',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Computer Science',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Technical Graphics',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Food and Nutrition',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Fashion and Fabrics',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
            [
                'subject_code' => strtoupper($faker->unique()->bothify('???-###', 'letters = A-Z')),
                'subject' => 'Woodwork and Metallurgy',
                'form_id' => 1,
                'subject_state_id' => 2,
            ],
        ];

        foreach ($subjects as $subject) {
            Subject::create($subject);
        }
    }
}
