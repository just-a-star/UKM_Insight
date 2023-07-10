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
                
            ],
            [
                'anggota_id' => 2,
                'kegiatan_id' => 1,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 1,
                'kegiatan_id' => 2,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 3,
                'kegiatan_id' => 3,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 5,
                'kegiatan_id' => 4,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 2,
                'kegiatan_id' => 5,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 3,
                'kegiatan_id' => 6,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 1,
                'kegiatan_id' => 7,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 8,
                'kegiatan_id' => 8,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 7,
                'kegiatan_id' => 9,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 9,
                'kegiatan_id' => 10,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 10,
                'kegiatan_id' => 11,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 11,
                'kegiatan_id' => 12,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 8,
                'kegiatan_id' => 13,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 13,
                'kegiatan_id' => 14,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 12,
                'kegiatan_id' => 15,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 14,
                'kegiatan_id' => 16,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 13,
                'kegiatan_id' => 17,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 15,
                'kegiatan_id' => 18,
                'role' => 'penanggung_jawab',
            ],
            [
                'anggota_id' => 16,
                'kegiatan_id' => 19,
                'role' => 'penanggung_jawab',
            ],
            [
                'kegiatan_id' => 7,
                'role' => 'peserta',
            ],
            [
                'kegiatan_id' => 8,
                'role' => 'peserta',
            ],
            
            
            // Add more data as needed
        ];

        foreach ($partisipanKegiatanData as $data) {
            PartisipanKegiatan::create($data);
        }
    }
}