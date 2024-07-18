<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'deskripsi_testimoni' => $this->faker->text(),
            'gambar_testimoni' => $this->faker->imageUrl(),
            'id_proyek' => $this->faker->numberBetween(1, 10),
        ];
    }
}
