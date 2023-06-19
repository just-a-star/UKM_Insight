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
             $deskripsi = $faker->word;
             $dana = $faker->randomNumber(6);
             $tgl_penerimaan = $faker->dateTimeThisDecade();
             $id = $faker->unique()->numberBetween(0, $max = PHP_INT_MAX);
             
 
 
             DB::table('dana_tetap')->insert([
                 'id'=> $id,
                 'nama' => $nama,
                 'deskripsi' => $deskripsi,
                 'dana' => $dana,
                 'tgl_penerimaan' => $tgl_penerimaan,
                 'created_at' => now(),
                 'updated_at' => now(),
             ]);
         }
        //
    }
}
