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

        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            $nama = $faker->name;
            $deskripsi = $faker->word;
            $id = $faker->randomNumber($nbDigits = 3, $strict = true);


            DB::table('aset')->insert([
                'id'=> $id,
                'ukm_id' => 1,
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
