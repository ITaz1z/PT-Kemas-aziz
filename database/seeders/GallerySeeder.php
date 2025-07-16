<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{

    public function run(): void
    {
        Gallery::create([
            'title' => 'Kegiatan Ekspor',
            'image' => 'ekspor1.jpg'
        ]);

        Gallery::create([
            'title' => 'Kunjungan Mitra',
            'image' => 'mitra1.jpg'
        ]);
    }
}
