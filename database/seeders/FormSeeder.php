<?php

namespace Database\Seeders;

use App\Models\Form;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $forms = [
            [
                'form' => 'Form 1',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
            [
                'form' => 'Form 2',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
            [
                'form' => 'Form 3',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
            [
                'form' => 'Form 4',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
            [
                'form' => 'Lower Six',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
            [
                'form' => 'Upper Six',
                'code' => strtoupper($faker->unique()->bothify('?-##', 'letters = A-Z')),
            ],
        ];

        foreach ($forms as $form) {
            Form::create($form);
        }
    }
}
