<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            $nama_kegiatan = $faker->word;
            $skala = $faker->word;
            $keuangan = $faker->randomNumber($nbDigits = 2, $strict = true);
            $tanggal_pelaksanaan = $faker->date($format = 'Y-m-d', $max = 'now');
            $id_ukm = DB::table('ukm')->inRandomOrder()->first()->id;
            for ($j = 0; $j < 2; $j++){
                DB::table('kegiatan')->insert([
                    'id' => $faker->unique()->randomNumber($nbDigits = 3, $strict = true),
                    'ukm_id' => $id_ukm,
                    'nama' => $nama_kegiatan,
                    'skala' => $skala,
                    'keuangan' => $keuangan,
                    'tgl_pelaksanaan' => $tanggal_pelaksanaan,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
             }
        }
    }
}
