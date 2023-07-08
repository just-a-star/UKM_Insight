<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;
use App\Models\Ukm;

class AnggotaSeeder extends Seeder
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
        $ukmBasket      = Ukm::find(3);
        $ukmBola        = Ukm::find(4);


        $data = [
            [
                'nama' => 'Putri Rahayu',
                'posisi' => 'Secretary',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2022,
                'no_telepon' => '081234567893',
                'email' => 'putrirahayu@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Ahmad Hidayat',
                'posisi' => 'Treasurer',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2021,
                'no_telepon' => '081234567894',
                'email' => 'ahmadhidayat@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Eka Nurhayati',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2022,
                'no_telepon' => '081234567895',
                'email' => 'ekanurhayati@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Rudi Hartono',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2021,
                'no_telepon' => '081234567896',
                'email' => 'rudihartono@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Siti Rahmawati',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2020,
                'no_telepon' => '081234567897',
                'email' => 'sitirahmawati@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Budi Santoso',
                'posisi' => 'Leader',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2021,
                'no_telepon' => '081234567898',
                'email' => 'budisantoso@example.com',
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Desi Handayani',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2019,
                'no_telepon' => '081234567899',
                'email' => 'desihandayani@example.com',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Agus Wijaya',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2020,
                'no_telepon' => '081234567800',
                'email' => 'aguswijaya@example.com',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Rina Fitriani',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2019,
                'no_telepon' => '081234567801',
                'email' => 'rinafitriani@example.com',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Ivan Permana',
                'posisi' => 'Leader',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2021,
                'no_telepon' => '081234567802',
                'email' => 'ivanpermana@example.com',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Yuni Susanti',
                'posisi' => 'Secretary',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2022,
                'no_telepon' => '081234567803',
                'email' => 'yunisusanti@example.com',
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'John Doe',
                'posisi' => 'Leader',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2021,
                'no_telepon' => '081234567761',
                'email' => 'johmdoe@example.com',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Ahmad Rahman',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2022,
                'no_telepon' => '08123434161',
                'email' => 'Ahmadrahman@example.com',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Budi Prasetyo',
                'posisi' => 'Member',
                'masa_jabatan' => '2022-2024',
                'angkatan' => 2022,
                'no_telepon' => '081234567812',
                'email' => 'budiprasetyo@example.com',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Desy Ananda',
                'posisi' => 'Secretary',
                'masa_jabatan' => '2022-2024',
                'angkatan' => 2022,
                'no_telepon' => '081234567890',
                'email' => 'desyananda@example.com',
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Muhammad Speed',
                'posisi' => 'Leader',
                'masa_jabatan' => '2022-2024',
                'angkatan' => 2021,
                'no_telepon' => '085551111333',
                'email' => 'Ssiiiuuu@example.com',
                'ukm_id' => $ukmBola->id,
            ],
            [
                'nama' => 'Hanry lee',
                'posisi' => 'Member',
                'masa_jabatan' => '2023-2024',
                'angkatan' => 2022,
                'no_telepon' => '08882334109',
                'email' => 'HanryLee@example.com',
                'ukm_id' => $ukmBola->id,
            ],
            [
                'nama' => 'Rizky Pratama',
                'posisi' => 'Member',
                'masa_jabatan' => '2022-2024',
                'angkatan' => 2021,
                'no_telepon' => '082345678901',
                'email' => 'rizkypratama@example.com',
                'ukm_id' => $ukmBola->id,
            ],
            // Add more data as needed
        ];

        foreach ($data as $item) {
            Anggota::create($item);
        }
    }
    
}