<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyek>
 */
class ProyekFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_proyek' => $this->faker->name(),
            'lokasi_proyek' => $this->faker->address(),
            'tahun_proyek' => $this->faker->date(),
            'size_proyek' => $this->faker->randomElement(['kecil', 'sedang', 'besar']),
            'budget_proyek'=> $this->faker->numberBetween(1000000, 100000000),
            'deskripsi_proyek' => $this->faker->text(),
            'foto_utama_proyek' => $this->faker->text(),
        ];
    }
}
