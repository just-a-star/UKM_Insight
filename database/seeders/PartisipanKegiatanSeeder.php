<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PartisipanKegiatan;
use App\Models\Anggota;
use App\Models\Kegiatan;
use Faker\Generator as FakerGenerator;
use Faker\Factory as FakerFactory;


class PartisipanKegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = $this->getFaker();

        $kegiatanIds = Kegiatan::pluck('id')->toArray();
        $anggotaIds = Anggota::pluck('id')->toArray();

        foreach (range(1,10) as $index){
            PartisipanKegiatan::create([
                'kegiatan_id' => $faker->randomElement($kegiatanIds),
                'anggota_id' => $faker->randomElement($anggotaIds),
                'role' => $faker->randomElement(['peserta', 'panitia', 'pembicara', 'penyelenggara', 'sponsor']),
            ]
            );
        }
    }

    protected function getFaker(): FakerGenerator
    {
        $faker = FakerFactory::create('id_ID');
        $faker->addProvider(new \Faker\Provider\id_ID\Address($faker));

        return $faker;

    }
}