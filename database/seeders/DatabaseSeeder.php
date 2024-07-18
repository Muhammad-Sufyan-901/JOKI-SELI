<?php

namespace Database\Seeders;

use App\Models\GambarProyek;
use App\Models\Proyek;
use App\Models\Testimonial;
use App\Models\User;
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
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Proyek::factory(10)->create();
        GambarProyek::factory(10)->create();
        Testimonial::factory(10)->create();


    }
}
