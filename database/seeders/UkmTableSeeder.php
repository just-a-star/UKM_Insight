<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Ukm;

class UkmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $data = [
            [
                
                'nama' => 'UKM Fotografi',
                'deskripsi' => 'Sebuah UKM yang bergerak di bidang fotografi',
            ],
            [
          
                'nama' => 'Programming Study Club',
                'deskripsi' => 'Sebuah UKM yang bergerak di bidang programming',
            ],
        ];
        foreach ($data as $item) {
            Ukm::create($item);
        }
    }
}