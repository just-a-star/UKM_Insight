<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeuanganUkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $id_ukm = DB::table('kegiatan')->inRandomOrder()->first()->id;
            $nama = $faker->word;
            for ($j = 0; $j < 7; $j++){
                DB::table('keuangan_ukm')->insert([
                    'id' => $faker->unique()->randomNumber($nbDigits = 3, $strict = true),
                    'Kegiatan_id' => $id_ukm,
                    'nama' => $nama,
                    'deskripsi' => $faker->word,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
