<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Amplop>
 */
class AmplopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'alamat' => fake()->city(),
            'tanggal' => fake()->date(),
            'nominal' => fake()->randomNumber(5, true),
            'keterangan' => fake()->word(10),
        ];
    }
}
