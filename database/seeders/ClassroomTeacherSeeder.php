<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class ClassroomTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $classrooms = Classroom::all();

        Teacher::all()->each(function ($teacher) use ($classrooms) {
            $teacher->classrooms()->attach(
                $classrooms->random(10)->pluck('id')
            );
        });
    }
}
