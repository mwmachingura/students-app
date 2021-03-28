<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(StudentTypeSeeder::class);
        $this->call(FormSeeder::class);
        $this->call(ClassroomSeeder::class);
        $this->call(HostelSeeder::class);
        $this->call(StudentTypeSeeder::class);
        $this->call(JobTypeSeeder::class);
        $this->call(SubjectStateSeeder::class);
        $this->call(StudentSeeder::class);
        $this->call(TeacherSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(SubjectSeeder::class);
        $this->call(StaffSeeder::class);
        $this->call(ClassroomTeacherSeeder::class);
    }
}
