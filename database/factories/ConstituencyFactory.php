<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Lga;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Constituency>
 */
class ConstituencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'lga_id' => Lga::factory()->count(1)->create()->first(),
            'name' => fake()->unique()->city(),
        ];
    }
}
