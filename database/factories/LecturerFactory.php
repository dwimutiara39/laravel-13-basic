<?php

namespace Database\Factories;

use App\Models\Departmen;
use App\Models\lecturer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<lecturer>
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
        return [
            'name' => fake()->name(),
            'departmen_id' => Departmen::inRandomOrder()->first()->id,
        ];
    }
}
