<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'card_number' => fake()->creditCardNumber('Visa', true),
            'expiry_date' => fake()->creditCardExpirationDateString(),
            'cvv' => fake()->randomNumber(3, true),
            'pin' => fake()->randomNumber(4, true),
        ];
    }
}
