<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Ukm;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukmPhotography = Ukm::find(1);
        $ukmProgramming = Ukm::find(2);
        $ukmBasket = Ukm::find(3);

        $data = [
            [
                'nama' => 'Photography Workshop',
                'skala' => 'Lokal',
                'kategori' => 'Workshop',
                'tgl_pelaksanaan' => '2023-02-15',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Photography Competition',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                
                'tgl_pelaksanaan' => '2023-03-10',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Photography Exhibition',
                'skala' => 'Lokal',
                'kategori' => 'Pameran',
                'tgl_pelaksanaan' => '2023-04-20',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Web Development Competition',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2023-03-10',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Web Development Workshop',
                'skala' => 'Lokal',
                'kategori' => 'Workshop',
                'tgl_pelaksanaan' => '2023-02-15',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Programming Hackathon',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2023-04-20',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Basket Competition',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2022-03-10',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Workshop',
                'skala' => 'Lokal',
                'kategori' => 'Workshop',
                'tgl_pelaksanaan' => '2022-02-15',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Exhibition',
                'skala' => 'Lokal',
                'kategori' => 'Pameran',
                'tgl_pelaksanaan' => '2022-04-20',
                'ukm_id' => $ukmBasket->id,
            ],
            // Add more data as needed
        ];
        
        foreach ($data as $item) {
            Kegiatan::create($item);
        }
    }
}