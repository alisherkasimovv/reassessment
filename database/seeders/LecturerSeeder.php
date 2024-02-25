<?php

namespace Database\Seeders;

use App\Models\Lecturer;
use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LecturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lecturer::factory()
            ->count(10)
            ->has(Subject::factory(1))
            ->create();
    }
}
