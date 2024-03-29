<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Ukm;
use App\Models\Asset;

class AssetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ukms = Ukm::whereIn('nama', ['UKM Fotografi', 'Programming Study Club','UKM Basket','UKM Sepak Bola'])->get();

        $data = [
            [

                'nama' => 'Kamera Canon 5D Mark IV',
                'deskripsi' => 'Kamera DSLR',
                'jumlah' => 1,
                'tgl_pengadaan' => '2021-01-01',
                
            ],
            [
                
                'nama' => 'Ring Light',
                'deskripsi' => 'Lampu untuk penerangan',
                'jumlah' => 1,
                'tgl_pengadaan' => '2020-01-01',
                
            ],
            [
                'nama' => 'Laptop ASUS ROG',
                'deskripsi' => 'Laptop untuk kegiatan programming',
                'jumlah' => 1,
                'tgl_pengadaan' => '2021-08-29',
                
                
            ],
            [
                'nama' => 'Bola Basket',
                'deskripsi' => 'Bola basket untuk pelatihan dan pertandingan',
                'jumlah' => 5,
                'tgl_pengadaan' => '2022-04-30',
                
                
            ],
            [
                'nama' => 'Bola ',
                'deskripsi' => 'Bola untuk pelatihan dan pertandingan',
                'jumlah' => 5,
                'tgl_pengadaan' => '2022-04-30',
                
                
            ],
            
        ];

        foreach ($ukms as $ukm) {
            $ukmName = $ukm->nama;

            if ($ukmName === 'UKM Fotografi') {
                $assets = [
                    $data[0], // Kamera Canon 5D Mark IV
                    $data[1], // Ring Light
                ];
            } elseif ($ukmName === 'Programming Study Club') {
                $assets = [
                    $data[2], // Laptop ASUS ROG
                ];
            }elseif ($ukmName === 'UKM Basket') {
                $assets = [
                    $data[3], // Bola Basket
                ];
            }elseif ($ukmName === 'UKM Sepak Bola') {
                $assets = [
                    $data[4], // Bola 
                ];
            }

            foreach ($assets as $asset) {
                $asset['ukm_id'] = $ukm->id;

                // Check if the record already exists
                $existingAsset = Asset::where('nama', $asset['nama'])->where('ukm_id', $asset['ukm_id'])->first();

                // Create the record if it doesn't exist
                if (!$existingAsset) {
                    Asset::create($asset);
                }
            }
        }
    }
}