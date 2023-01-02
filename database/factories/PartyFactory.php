<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Party>
 */
class PartyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
    {
        
        return [
            'user_id' => $user = User::factory()->create(), //party creator'
            'chairman_id' => $user, // party chairman
            'name' => $name = ucwords(fake()->unique()->word()),
            'abbreviation' => strtoupper(fake()->unique()->lexify()),
            'slogan' => fake()->unique()->word(),
            // 'slug',
        ];
    }
}
