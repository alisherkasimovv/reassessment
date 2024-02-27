<?php

namespace Database\Factories;

use App\Models\Group;
use App\Models\Subject;
use App\Models\Student;
use App\Models\Faculty;
use App\Models\Lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Assessment>
 */
class AssessmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $score = rand(0, 100);
        $passed = !($score == 0);
        $lesson_type = ['MARUZA', 'AMALIYOT'];

        return [
        'lecturer_id' => Lecturer::factory(),
        'faculty_id' => Faculty::factory(),
        'group_id' => Group::factory(),
        'student_id' => Student::factory(),
        'subject_id' => Subject::factory(),
        'lesson_type' => $lesson_type[rand(0, 1)],
        'theme' => $this->faker->address(),
        'lesson_date' => $this->faker->date(),
        'lesson_score' => $score,
        'is_passed' => $passed,
        ];
    }
}
