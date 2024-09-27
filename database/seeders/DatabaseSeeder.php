<?php

namespace Database\Seeders;

use App\Models\GambarProyek;
use App\Models\Proyek;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Response;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PHPUnit\Event\Code\Test;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
    //    call all the seeeder
        $this->call([
            ProyekSeeder::class,
            TestimonialSeeder::class,
            GambarProyekSeeder::class,
        ]);


    }
}
