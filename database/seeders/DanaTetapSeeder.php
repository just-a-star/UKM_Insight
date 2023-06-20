<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DanaTetapSeeder extends Seeder
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
         for ($i = 0; $i < 10; $i++) {
             $nama = $faker->name;
             $id_keuangan = DB::table('keuangan_ukm')->inRandomOrder()->first()->id;
             $deskripsi = $faker->word;
             $dana = $faker->randomNumber(6);
             $tgl_penerimaan = $faker->date($format = 'Y-m-d', $max = 'now');

             for ($j = 0; $j < 20; $j++) {

                 DB::table('dana_tetap')->insert([
                     'id' => $faker->unique()->randomNumber($nbDigits = 3, $strict = true),
                     'keuangan_id' => $id_keuangan,
                     'nama' => $nama,
                     'deskripsi' => $deskripsi,
                     'dana' => $dana,
                     'tgl_penerimaan' => $tgl_penerimaan,
                     'created_at' => now(),
                     'updated_at' => now(),
                 ]);
             }
         }
        //
    }
}
