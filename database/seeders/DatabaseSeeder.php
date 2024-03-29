<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            DashboardTableSeeder::class,
            UkmTableSeeder::class,
            AssetSeeder::class,
            KegiatanSeeder::class,
            DanaSeeder::class,
            AnggotaSeeder::class,
            
            PartisipanKegiatanSeeder::class,
            FeedbackKegiatanSeeder::class,
        ]);
    }
}