<?php

namespace Database\Seeders;

use App\Models\Faculty;
use App\Models\Group;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Faculty::factory()
            ->count(5)
            ->has(
                Group::factory()
                ->count(10)
                ->has(
                    Student::factory()
                    ->count(25)))
            ->create();
    }
}
