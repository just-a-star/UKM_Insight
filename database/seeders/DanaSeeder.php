<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Ukm;
use App\Models\Dana;
use App\Models\Kegiatan;
use App\Models\Asset;


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
        $ukmBasket = Ukm::where('nama', 'UKM Basket')->first();
        $ukmobola = Ukm::where('nama', 'UKM Sepak Bola')->first();

        $kegiatanPhotographyWorkshop = Kegiatan::where('nama', 'Photography Workshop')->first();
        $kegiatanlombafotokamspus = Kegiatan::where('nama', 'Lomba Fotografi Kampus Tema Keseharian mahasiswa')->first();
        $kegiatanPhotographyCompetition23 = Kegiatan::where('nama', 'Photography Competition 2023')->first();
        $kegiatanPhotographyExhibition = Kegiatan::where('nama', 'Photography Exhibition')->first();
        $kegiatanPameranfoto = Kegiatan::where('nama', 'Pameran Fotografi Lokal')->first();
        $kegiatanWebDevCompetition = Kegiatan::where('nama', 'Web Development Competition')->first();
        $kegiatanAplikasiKampus = Kegiatan::where('nama', 'Projek Kolaboratif Aplikasi untuk Universitas')->first();
        $kegiatanWebDevWorkshop = Kegiatan::where('nama', 'Web Development Workshop')->first();
        $kegiatanProgrammingHackathon23 = Kegiatan::where('nama', 'Programming Hackathon 2023')->first();
        $kegiatanBasketCompetition23 = Kegiatan::where('nama', 'Basket Competition 2023')->first();
        $kegiatanBasketWorkshop = Kegiatan::where('nama', 'Basket Workshop')->first();
        $kegiatanBasketExhibition = Kegiatan::where('nama', 'Basket Exhibition')->first();
        $kegiatanbolafmth = Kegiatan::where('nama', 'Pertandingan Bola Persahabatan')->first();


        $asetRingLight = Asset::where('nama', 'Ring Light')->first();
        $asetLaptopAsusROG = Asset::where('nama', 'Laptop ASUS ROG')->first();
        $asetbolabasket = Asset::where('nama', 'Bola Basket')->first();
        $asetbolasepak = Asset::where('nama', 'Bola')->first();

        $data = [
            [
                'nama' => 'Dana Ring Light',
                'deskripsi' => 'Dana untuk pembelian Ring Light',
                'dana' => 80000,
                'waktu_transaksi' => '2023-02-10',
                'tipe_transaksi' => 'Pengeluaran',
                'aset_id' => $asetRingLight->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Laptop',
                'deskripsi' => 'Dana untuk pembelian ASUS ROG',
                'dana' => 20000000,
                'waktu_transaksi' => '2023-05-10',
                'tipe_transaksi' => 'Pengeluaran',
                'aset_id' => $asetLaptopAsusROG->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Bola basket',
                'deskripsi' => 'Dana untuk Pembelian bola basket',
                'dana' => 500000,
                'waktu_transaksi' => '2022-04-28',
                'tipe_transaksi' => 'Pengeluaran',
                'aset_id' => $asetbolabasket->id,
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Bola',
                'deskripsi' => 'Dana untuk Pembelian bola untuk UKM Sepak Bola',
                'dana' => 500000,
                'waktu_transaksi' => '2022-04-28',
                'tipe_transaksi' => 'Pengeluaran',
                'aset_id' => $asetbolasepak->id,
                'ukm_id' => $ukmobola->id,
            ],
            [
                'nama' => 'Dana Photography Workshop',
                'deskripsi' => 'Dana untuk Photography Workshop',
                'dana' => 1000000,
                'waktu_transaksi' => '2023-02-10',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyWorkshop->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Lomba Fotografi Kampus Tema Keseharian mahasiswa',
                'deskripsi' => 'Dana untuk Fotografi di area Kampus',
                'dana' => 1600000,
                'waktu_transaksi' => '2021-06-06',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanlombafotokamspus->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Photography Competition 2023',
                'deskripsi' => 'Funds for the Photography Competition',
                'dana' => 2000000,
                'waktu_transaksi' => '2023-03-05',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyCompetition23->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Photography Exhibition',
                'deskripsi' => 'Dana untuk Photography Exhibition',
                'dana' => 1500000,
                'waktu_transaksi' => '2023-04-15',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPhotographyExhibition->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Pameran Fotografi lokal',
                'deskripsi' => 'Dana untuk Pameran fotografi',
                'dana' => 1500000,
                'waktu_transaksi' => '2021-08-07',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanPameranfoto->id,
                'ukm_id' => $ukmPhotography->id,
            ],
            [
                'nama' => 'Dana Web Dev Competition',
                'deskripsi' => 'Dana untuk Web Development Competition',
                'dana' => 2500000,
                'waktu_transaksi' => '2023-03-05',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanWebDevCompetition->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Projek Kolaboratif Aplikasi untuk Universitas',
                'deskripsi' => 'Dana untuk Projek Kolaboratif Aplikasi untuk Universitas',
                'dana' => 10000000,
                'waktu_transaksi' => '2021-08-18',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanAplikasiKampus->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Dana Web Dev Workshop',
                'deskripsi' => 'Dana untuk Web Development Workshop',
                'dana' => 2200000,
                'waktu_transaksi' => '2023-02-10',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanWebDevWorkshop->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Dana Hackathon 2023',
                'deskripsi' => 'Dana untuk Programming Hackathon',
                'dana' => 3800000,
                'waktu_transaksi' => '2023-04-15',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanProgrammingHackathon23->id,
                'ukm_id' => $ukmProgramming->id,
            ],
            [
                'nama' => 'Dana Lomba Basket 2023',
                'deskripsi' => 'Dana pengeluaran lomba basket skala nasional',
                'dana' => 3000000,
                'waktu_transaksi' => '2022-03-06',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanBasketCompetition23->id,
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Dana Basket Workshop',
                'deskripsi' => 'Dana pengeluaran Workshop basket',
                'dana' => 2000000,
                'waktu_transaksi' => '2022-07-04',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanBasketWorkshop->id,
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Dana Pameran Basket',
                'deskripsi' => 'Dana pengeluaran untuk Pameran basket',
                'dana' => 1800000,
                'waktu_transaksi' => '2022-03-06',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanBasketExhibition->id,
                'ukm_id' => $ukmBasket->id,
            ],
            [
                'nama' => 'Dana Pertandingan Persahabatan',
                'deskripsi' => 'Dana pertandingan persahabatan antar ukm',
                'dana' => 1800000,
                'waktu_transaksi' => '2022-03-06',
                'tipe_transaksi' => 'Pengeluaran',
                'kegiatan_id' => $kegiatanbolafmth->id,
                'ukm_id' => $ukmobola->id,
            ],
            [
                'nama' => 'Pemasukan saat jualan',
                'deskripsi' => 'Pemasukan Dana pertandingan persahabatan antar ukm',
                'dana' => 2000000,
                'waktu_transaksi' => now(),
                'tipe_transaksi' => 'Pemasukan',
                'kegiatan_id' => $kegiatanbolafmth->id,
                'ukm_id' => $ukmobola->id,
            ],
            // Add more data as needed
        ];

        foreach ($data as $item) {
            Dana::create($item);
        }
    }
}
