<?php

namespace Database\Seeders;

use App\Models\Proyek;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProyekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // make 10 proyek
        Proyek::create([
            'nama_proyek' => 'Rumah Sakit',
            'lokasi_proyek' => 'Denpasar',
            'tahun_proyek' => '2021-01-01',
            'size_proyek' => '200',
            'budget_proyek' => '2560000000',
            'deskripsi_proyek' => 'Deskripsi Proyek 1',
            'foto_utama_proyek' => 'proyek.jpg',
        ]);

        Proyek::create([
    'nama_proyek' => 'Apartemen Mewah',
    'lokasi_proyek' => 'Jakarta',
    'tahun_proyek' => '2020-06-15',
    'size_proyek' => '350',
    'budget_proyek' => '4500000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 2',
    'foto_utama_proyek' => 'apartemen_mewah.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Jembatan Tol',
    'lokasi_proyek' => 'Surabaya',
    'tahun_proyek' => '2019-09-22',
    'size_proyek' => '500',
    'budget_proyek' => '7500000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 3',
    'foto_utama_proyek' => 'jembatan_tol.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Pusat Perbelanjaan',
    'lokasi_proyek' => 'Bandung',
    'tahun_proyek' => '2022-02-01',
    'size_proyek' => '300',
    'budget_proyek' => '3900000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 4',
    'foto_utama_proyek' => 'mall.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Gedung Perkantoran',
    'lokasi_proyek' => 'Semarang',
    'tahun_proyek' => '2021-05-12',
    'size_proyek' => '400',
    'budget_proyek' => '6000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 5',
    'foto_utama_proyek' => 'gedung_perkantoran.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Hotel Bintang 5',
    'lokasi_proyek' => 'Bali',
    'tahun_proyek' => '2023-03-18',
    'size_proyek' => '600',
    'budget_proyek' => '9000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 6',
    'foto_utama_proyek' => 'hotel_bintang_5.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Pabrik Garmen',
    'lokasi_proyek' => 'Solo',
    'tahun_proyek' => '2020-08-10',
    'size_proyek' => '700',
    'budget_proyek' => '5500000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 7',
    'foto_utama_proyek' => 'pabrik_garmen.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Stadion Sepak Bola',
    'lokasi_proyek' => 'Makassar',
    'tahun_proyek' => '2021-11-05',
    'size_proyek' => '1000',
    'budget_proyek' => '15000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 8',
    'foto_utama_proyek' => 'stadion.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Sekolah Internasional',
    'lokasi_proyek' => 'Yogyakarta',
    'tahun_proyek' => '2022-09-09',
    'size_proyek' => '450',
    'budget_proyek' => '3000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 9',
    'foto_utama_proyek' => 'sekolah_internasional.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Rumah Villa',
    'lokasi_proyek' => 'Lombok',
    'tahun_proyek' => '2023-01-25',
    'size_proyek' => '250',
    'budget_proyek' => '2000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 10',
    'foto_utama_proyek' => 'villa.jpg',
]);

Proyek::create([
    'nama_proyek' => 'Kawasan Industri',
    'lokasi_proyek' => 'Bekasi',
    'tahun_proyek' => '2020-12-17',
    'size_proyek' => '800',
    'budget_proyek' => '8000000000',
    'deskripsi_proyek' => 'Deskripsi Proyek 11',
    'foto_utama_proyek' => 'kawasan_industri.jpg',
]);

   

    }
}
