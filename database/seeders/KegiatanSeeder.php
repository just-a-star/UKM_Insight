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
        $ukmBola = Ukm::find(4);


        $data = [
            [
                'nama' => 'Photography Workshop',
                'skala' => 'Lokal',
                'kategori' => 'Workshop',
                'tgl_pelaksanaan' => '2023-02-15',
                'proposal' => 'https://drive.google.com/file/d/1I7teXNRCRUHxufZbEJfPL-DTKkqyc6xv/view?usp=sharing',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Photography Competition 2023',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',

                'tgl_pelaksanaan' => '2023-03-10',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Photography Competition 2022',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',

                'tgl_pelaksanaan' => '2022-03-10',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Lomba Fotografi Kampus Tema Keseharian mahasiswa',
                'skala' => 'Lokal',
                'kategori' => 'Kompetisi',

                'tgl_pelaksanaan' => '2021-06-11',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Photography Competition 2021',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',

                'tgl_pelaksanaan' => '2021-03-10',
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
                'nama' => 'Pameran Fotografi Lokal',
                'skala' => 'Lokal',
                'kategori' => 'Pameran',
                'tgl_pelaksanaan' => '2021-08-09',
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
                'nama' => 'Projek Kolaboratif Aplikasi untuk Universitas',
                'skala' => 'Lokal',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2021-08-24',
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
                'nama' => 'Programming Hackathon 2023',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2023-07-05',
                'proposal'=> 'https://drive.google.com/file/d/1gYafcOuF3fhPdvxa0THcpw57lOmqso5Q/view?usp=sharing',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Programming Hackathon 2022',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2022-07-05',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Programming Hackathon 2021',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2021-07-05',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Basket Competition 2022',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2022-03-10',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Competition 2023',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2022-03-10',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Competition 2021',
                'skala' => 'Nasional',
                'kategori' => 'Kompetisi',
                'tgl_pelaksanaan' => '2021-03-10',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Workshop',
                'skala' => 'Lokal',
                'kategori' => 'Workshop',
                'tgl_pelaksanaan' => '2023-07-06',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Basket Exhibition',
                'skala' => 'Lokal',
                'kategori' => 'Pameran',

                'tgl_pelaksanaan' => now(),
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Pertandingan Bola Persahabatan',
                'skala' => 'Lokal',
                'kategori' => 'Kompetisi',

                'tgl_pelaksanaan' => now(),
                'ukm_id' => $ukmBola->id,
            ],
            // Add more data as needed
        ];

        foreach ($data as $item) {
            Kegiatan::create($item);
        }
    }
}