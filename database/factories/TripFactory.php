<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'trip_type' => fake()->randomElement(['oneway', 'roundtrip']),
            'depart_from' => fake()->randomElement(['bacolod', 'iloilo', 'batangas', 'cebu']),
            'arrive_to' => fake()->randomElement(['bacolod', 'iloilo', 'batangas', 'cebu']),
            'departure_date' => fake()->dateTimeInInterval('-0 days', '+5 days'),
            'passenger_count' => fake()->numberBetween(1,2)
        ];
    }
}
