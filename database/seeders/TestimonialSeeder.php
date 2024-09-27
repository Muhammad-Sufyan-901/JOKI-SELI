<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Testimonial::create([
            'deskripsi_testimoni' => 'Dari sisi pengerjaan sudah cukup bagus, detail yang pas, waktu pengerjaan yang sesuai deadline',
            'gambar_testimoni' => 'testimoni1.jpg',
            'id_proyek' => '1',
        ]);

        Testimonial::create([
    'deskripsi_testimoni' => 'Proyek dikerjakan dengan sangat profesional dan tepat waktu. Hasilnya memuaskan.',
    'gambar_testimoni' => 'testimoni2.jpg',
    'id_proyek' => '2',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Kualitas pengerjaan sangat baik, hasil sesuai ekspektasi dan komunikasi berjalan lancar.',
    'gambar_testimoni' => 'testimoni3.jpg',
    'id_proyek' => '3',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Tim sangat responsif dan menyelesaikan proyek tepat waktu dengan kualitas yang luar biasa.',
    'gambar_testimoni' => 'testimoni4.jpg',
    'id_proyek' => '4',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Pengerjaan yang teliti dan profesional, sangat memuaskan dari awal hingga akhir proyek.',
    'gambar_testimoni' => 'testimoni5.jpg',
    'id_proyek' => '5',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Proyek selesai sesuai target waktu dan hasil yang diperoleh sangat berkualitas.',
    'gambar_testimoni' => 'testimoni6.jpg',
    'id_proyek' => '6',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Proyek dikelola dengan baik, komunikasi jelas, dan hasil akhir melebihi harapan.',
    'gambar_testimoni' => 'testimoni7.jpg',
    'id_proyek' => '7',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Saya sangat puas dengan hasilnya, pengerjaan sesuai jadwal dan kualitas yang memuaskan.',
    'gambar_testimoni' => 'testimoni8.jpg',
    'id_proyek' => '8',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Pelayanan sangat baik, semua dikerjakan dengan sangat profesional dan sesuai permintaan.',
    'gambar_testimoni' => 'testimoni9.jpg',
    'id_proyek' => '9',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Kualitas pengerjaan yang sangat baik dan tim sangat kooperatif dalam menyelesaikan proyek.',
    'gambar_testimoni' => 'testimoni10.jpg',
    'id_proyek' => '1',
]);

Testimonial::create([
    'deskripsi_testimoni' => 'Hasil proyek luar biasa, melebihi ekspektasi dan selesai tepat waktu dengan detail sempurna.',
    'gambar_testimoni' => 'testimoni11.jpg',
    'id_proyek' => '2',
]);

    }
}
