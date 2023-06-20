<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UkmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        //
//        DB::table('ukm')->insert([
//
//            'nama' => 'Programming Study Club',
//            'deskripsi' => 'UKM ini berfokus pada pengembangan skill programming',
//            'created_at' => '2021-06-09 08:22:27',
//            'updated_at' => '2021-06-09 08:22:27',
//        ]);
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 2; $i++) {
            $nama = $faker->name;
            $deskripsi = $faker->word;
            $id = $faker->unique()->randomNumber($nbDigits = 3, $strict = true);
            DB::table('ukm')->insert([
                'id'=> $id,
                'nama' => $nama,
                'deskripsi' => $deskripsi,
                'created_at' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'updated_at' => $faker->date($format = 'Y-m-d', $max = 'now')
            ]);
        }


        for ($i = 0; $i < 5; $i++) {

            $email = $faker->unique()->safeEmail;
            $address = $faker->address;
            $phone = $faker->phoneNumber;
            $id = DB::table('ukm')->inRandomOrder()->first()->id;
            for ($i = 0; $i < 5; $i++) {
                DB::table('anggota')->insert([
                    'ukm_id' => $id,
                    'nama' => $faker->name,
                    'posisi' => 'Anggota',
                    'masa_jabatan' => '2021-2022',
                    'angkatan' => $faker->numberBetween($min = 2017, $max = 2023),
                    'no_telepon' => $faker->phoneNumber,
                    'email' => $email,
                    'created_at' => now(),
                    'updated_at' => now(),

                    // Add other columns if necessary
                ]);
            }
        }
    }
}
