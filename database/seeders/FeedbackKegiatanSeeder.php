<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FeedbackKegiatanSeeder extends Seeder
{
    public function run()
    {
        // rating : Excellent, Good, Fair, Poor
        // kegiatan totalnya ada 9
        $feedback = [
            [
                'kegiatan_id' => 1,
                'partisipan_kegiatan_id' => 1,
                'rating' => 'Excellent',
                'komentar' => 'Kegiatannya sangat menarik dan informatif!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 2,
                'partisipan_kegiatan_id' => 2,
                'rating' => 'Good',
                'komentar' => 'Saya sangat senang bisa ikut serta dalam kegiatan ini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 3,
                'partisipan_kegiatan_id' => 3,
                'rating' => 'Good',
                'komentar' => 'Kegiatannya sangat menarik dan saya bertemu teman baru',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'kegiatan_id' => 3,
                'partisipan_kegiatan_id' => 4,
                'rating' => 'Fair',
                'komentar' => 'Kegiatannya biasa saja.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 4,
                'partisipan_kegiatan_id' => 5,
                'rating' => 'Poor',
                'komentar' => 'Kegiatannya sangat membosankan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 5,
                'partisipan_kegiatan_id' => 6,
                'rating' => 'Good',
                'komentar' => 'Kegiatannya Menyenangkan dan para peserta memenuhi peraturan yang berlaku.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 7,
                'partisipan_kegiatan_id' => 7,
                'rating' => 'Excellent',
                'komentar' => 'Kegiatannya Menyenangkan dan permainan para pemain bagus.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 6,
                'partisipan_kegiatan_id' => 7,
                'rating' => 'Excellent',
                'komentar' => 'Kegiatannya menantang dan seru.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 8,
                'partisipan_kegiatan_id' => 3,
                'rating' => 'Excellent',
                'komentar' => 'Kegiatan seru dan bisa belajar hal baru.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 9,
                'partisipan_kegiatan_id' => 5,
                'rating' => 'Excellent',
                'komentar' => 'Kegiatannya berjalan lancar sesuai expetasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 7,
                'partisipan_kegiatan_id' => 2,
                'rating' => 'Good',
                'komentar' => 'Kegiatan lancar tanpa ada kerusuhan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 6,
                'partisipan_kegiatan_id' => 5,
                'rating' => 'Fair',
                'komentar' => 'Sudah dibuatin acara kompetisi, eh tetap pake chat gpt.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 10,
                'partisipan_kegiatan_id' => 5,
                'rating' => 'Excellent',
                'komentar' => 'Acara bagus dan menyenangkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 11,
                'partisipan_kegiatan_id' => 1,
                'rating' => 'Good',
                'komentar' => 'Acara bagus dan menyenangkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 12,
                'partisipan_kegiatan_id' => 2,
                'rating' => 'Excellent',
                'komentar' => 'Acara berjalan lancar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 17,
                'partisipan_kegiatan_id' => 10,
                'rating' => 'Excellent',
                'komentar' => 'Acara berjalan lancar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 17,
                'partisipan_kegiatan_id' => 7,
                'rating' => 'Excellent',
                'komentar' => 'Acara berjalan lancar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 17,
                'partisipan_kegiatan_id' => 4,
                'rating' => 'Excellent',
                'komentar' => 'Acara sesuai yang saya bayangkan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 18,
                'partisipan_kegiatan_id' => 7,
                'rating' => 'Excellent',
                'komentar' => 'Acara berjalan lancar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 19,
                'partisipan_kegiatan_id' => 4,
                'rating' => 'Excellent',
                'komentar' => 'Acara berjalan lancar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 12,
                'partisipan_kegiatan_id' => 3,
                'rating' => 'Good',
                'komentar' => 'Terima kasih atas pengalaman yang berharga!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 5,
                'partisipan_kegiatan_id' => 9,
                'rating' => 'Fair',
                'komentar' => 'Ada beberapa hal yang perlu ditingkatkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 8,
                'partisipan_kegiatan_id' => 1,
                'rating' => 'Excellent',
                'komentar' => 'Sangat puas dengan pelaksanaan kegiatan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 15,
                'partisipan_kegiatan_id' => 6,
                'rating' => 'Poor',
                'komentar' => 'Kurang memuaskan, harap diperbaiki.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 3,
                'partisipan_kegiatan_id' => 2,
                'rating' => 'Good',
                'komentar' => 'Acara menarik dan bermanfaat.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 10,
                'partisipan_kegiatan_id' => 5,
                'rating' => 'Excellent',
                'komentar' => 'Sangat terkesan dengan kualitas kegiatan ini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 7,
                'partisipan_kegiatan_id' => 8,
                'rating' => 'Good',
                'komentar' => 'Berharap ada lebih banyak sesi interaktif.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 1,
                'partisipan_kegiatan_id' => 10,
                'rating' => 'Fair',
                'komentar' => 'Perlu perbaikan dalam hal waktu pelaksanaan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 9,
                'partisipan_kegiatan_id' => 4,
                'rating' => 'Excellent',
                'komentar' => 'Peserta sangat terlibat dalam kegiatan ini.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 17,
                'partisipan_kegiatan_id' => 1,
                'rating' => 'Good',
                'komentar' => 'Pembicara sangat menginspirasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'kegiatan_id' => 6,
                'partisipan_kegiatan_id' => 9,
                'rating' => 'Poor',
                'komentar' => 'Kegiatan tidak sesuai dengan harapan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],



            //17,18,19
            // [
            //     'kegiatan_id' => 3,
            //     'partisipan_kegiatan_id' => 8,
            //     'rating' => 'Good',
            //     'komentar' => 'Kegiatannya Menyenangkan dan menambah pengalaman.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // [
            //     'kegiatan_id' => 6,
            //     'partisipan_kegiatan_id' => 9,
            //     'rating' => 'Good',
            //     'komentar' => 'Kegiatannya Menyenangkan.',
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
            // Add more feedback data as needed
        ];

        DB::table('feedback_kegiatan')->insert($feedback);
    }
}
