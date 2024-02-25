<?php

namespace Database\Factories;

use App\Models\Faculty;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Group>
 */
class GroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $langs = ['UZB', 'RUS', 'ENG'];
        return [
            'name' => $this->faker->colorName(),
            'faculty_id' => Faculty::factory(),
            'language' => $langs[rand(0, 2)],
            'grade' => rand(1, 6)
        ];
    }
}
