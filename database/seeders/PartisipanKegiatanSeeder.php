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
        // 'peserta', 'panitia', 'pembicara', 'penyelenggara', 'sponsor', 'penanggung_jawab'
        $partisipanKegiatanData = [
            [
                'kegiatan_id' => 1,
                'anggota_id' => 1,
                'role' => 'peserta',
            ],
            [
                'kegiatan_id' => 2,
                'anggota_id' => 2,
                'role' => 'panitia',
            ],
            [
                'kegiatan_id' => 3,
                'anggota_id' => 3,
                'role' => 'peserta',
            ],
            [
                'kegiatan_id' => 4,
                
                // 'anggota_id' => 4,
                'role' => 'sponsor',
                
                
            ],
            [
                'kegiatan_id' => 5,
                'role' => 'penyelenggara',
                'anggota_id' => 5,
            ],
            [
                'anggota_id' => 1,
                'kegiatan_id' => 6,
                'role' => 'penanggung_jawab',
            ],
            [
                'kegiatan_id' => 7,
                'role' => 'peserta',
            ],
            
            
            // Add more data as needed
        ];

        foreach ($partisipanKegiatanData as $data) {
            PartisipanKegiatan::create($data);
        }
    }
}