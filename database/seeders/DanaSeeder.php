<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Ukm;
use App\Models\Dana;
use App\Models\Kegiatan;


class DanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukmPhotography = Ukm::where('nama', 'UKM Fotografi')->first();
        $ukmProgramming = Ukm::where('nama', 'Programming Study Club')->first();

        $kegiatanPhotographyWorkshop = Kegiatan::where('nama', 'Photography Workshop')->first();
        $kegiatanPhotographyCompetition = Kegiatan::where('nama', 'Photography Competition')->first();
        $kegiatanPhotographyExhibition = Kegiatan::where('nama', 'Photography Exhibition')->first();
        $kegiatanWebDevCompetition = Kegiatan::where('nama', 'Web Development Competition')->first();
        $kegiatanWebDevWorkshop = Kegiatan::where('nama', 'Web Development Workshop')->first();
        $kegiatanProgrammingHackathon = Kegiatan::where('nama', 'Programming Hackathon')->first();

        $data = [
            [
                'nama' => 'Dana Workshop',
                'deskripsi' => 'Funds for the Photography Workshop',
                'dana' => 1000000,
                'waktu_transaksi' => '2023-02-10',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyWorkshop->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Competition',
                'deskripsi' => 'Funds for the Photography Competition',
                'dana' => 2000000,
                'waktu_transaksi' => '2023-03-05',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyCompetition->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Exhibition',
                'deskripsi' => 'Funds for the Photography Exhibition',
                'dana' => 1500000,
                'waktu_transaksi' => '2023-04-15',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyExhibition->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Web Dev Competition',
                'deskripsi' => 'Funds for the Web Development Competition',
                'dana' => 2500000,
                'waktu_transaksi' => '2023-03-05',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanWebDevCompetition->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Dana Web Dev Workshop',
                'deskripsi' => 'Funds for the Web Development Workshop',
                'dana' => 1200000,
                'waktu_transaksi' => '2023-02-10',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanWebDevWorkshop->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Dana Hackathon',
                'deskripsi' => 'Funds for the Programming Hackathon',
                'dana' => 1800000,
                'waktu_transaksi' => '2023-04-15',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanProgrammingHackathon->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            // Add more data as needed
        ];

        foreach ($data as $item) {
            Dana::create($item);
        }
    
        

    }
}