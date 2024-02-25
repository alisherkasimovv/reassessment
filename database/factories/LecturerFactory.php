<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lecturer>
 */
class LecturerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $degrees = ['MSc', 'PHd', 'BSc', 'Professor'];
        return [
            'full_name' => $this->faker->name(),
            'degree' => $degrees[rand(0, 2)]
        ];
    }
}
