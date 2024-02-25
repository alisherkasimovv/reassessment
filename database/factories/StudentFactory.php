<?php

namespace Database\Factories;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = ['CONTRACT', 'GRAND'];
        return [
            'full_name' => $this->faker->name(),
            'group_id' => Group::factory(),
            'study_type' => $type[rand(0, 1)]
        ];
    }
}
