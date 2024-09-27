<?php

namespace Database\Seeders;

use App\Models\GambarProyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GambarProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GambarProyek::create([
            'gambar_proyek' => 'proyek1.jpg',
            'id_proyek' => 1,
        ]);

        GambarProyek::create([
            'gambar_proyek' => 'proyek2.jpg',
    'id_proyek' => 2,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek3.jpg',
    'id_proyek' => 3,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek4.jpg',
    'id_proyek' => 4,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek5.jpg',
    'id_proyek' => 5,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek6.jpg',
    'id_proyek' => 6,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek7.jpg',
    'id_proyek' => 7,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek8.jpg',
    'id_proyek' => 8,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek9.jpg',
    'id_proyek' => 9,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek10.jpg',
    'id_proyek' => 10,
]);

GambarProyek::create([
    'gambar_proyek' => 'proyek1_additional.jpg',
    'id_proyek' => 1,
]);

    }
}
