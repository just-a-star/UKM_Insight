<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $id = 1;
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 11; $i++) {
            $deskripsi = $faker->word;
            $id_ukm = DB::table('ukm')->inRandomOrder()->first()->id;

            for ($j = 0; $j < 10; $j++) {
                DB::table('aset')->insert([
                    'id' => $faker->unique()->randomNumber($nbDigits = 3, $strict = true),
                    'ukm_id' => $id_ukm,
                'nama' => $faker->name,
                'deskripsi' => $deskripsi,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            }
        }
    }
}
