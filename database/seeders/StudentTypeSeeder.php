<?php

namespace Database\Seeders;

use App\Models\StudentType;
use Illuminate\Database\Seeder;

class StudentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $studentTypes = [
            [
                'category' => 'Day Scholar',
                'description' => 'Student comes to school for lessons only, returning home at day end',
            ],
            [
                'category' => 'Boarder',
                'description' => 'Student enrolled into the halls of residence (hostels) and in the custosy of the school',
            ],
        ];

        foreach ($studentTypes as $studentType) {
            StudentType::create($studentType);
        };
    }
}
