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
                'komentar' => 'Kegiatannya sangat menarik dan informatif!',
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
            // Add more feedback data as needed
        ];

        DB::table('feedback_kegiatan')->insert($feedback);
    }
}