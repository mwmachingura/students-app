<?php

namespace Database\Seeders;

use App\Models\SubjectState;
use Illuminate\Database\Seeder;

class SubjectStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subjectStates = [
            [
                'state' => 'Mandatory',
                'description' => 'Must be taken by student to move onto next form',
            ],
            [
                'state' => 'Optional',
                'description' => 'Student can select this subject or an equivalent subject type',
            ]
        ];

        foreach ($subjectStates as $subjectState) {
            SubjectState::create($subjectState);
        };
    }
}
