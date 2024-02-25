<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $programmes = [
            'Master of Public Health in Epidemiology',
            'Bachelor of Science in Medical Imaging',
            'Master of Science in Global Health',
            'Doctor of Osteopathic Medicine (DO)',
            'Bachelor of Medicine, Bachelor of Surgery (MBBS)'];
        return [
            'name' => $programmes[rand(0, 4)],
            'faculty_code' => (string) rand(1000000, 9000000)
        ];
    }
}
