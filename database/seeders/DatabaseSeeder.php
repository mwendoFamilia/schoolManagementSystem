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
        \App\Models\User::factory(10)->create();
        \App\Models\Address::factory(10)->create();
        \App\Models\Classes::factory(10)->create();
        \App\Models\Exam::factory(10)->create();
        \App\Models\Fee::factory(10)->create();
        \App\Models\Homework::factory(10)->create();
        \App\Models\Leader::factory(10)->create();
        \App\Models\Parent_::factory(10)->create();
        \App\Models\Report::factory(10)->create();
        \App\Models\School::factory(10)->create();
        \App\Models\Student::factory(10)->create();
        \App\Models\StudentAddress::factory(10)->create();
        \App\Models\StudentClass::factory(10)->create();
        \App\Models\StudentFee::factory(10)->create();
        \App\Models\StudentLeader::factory(10)->create();
        \App\Models\StudentParent::factory(10)->create();
        \App\Models\Subject::factory(10)->create();
        \App\Models\Teacher::factory(10)->create();
        \App\Models\Term::factory(10)->create();
        \App\Models\Test::factory(10)->create();
        \App\Models\Todo::factory(10)->create();
    }
}
