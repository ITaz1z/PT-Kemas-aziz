<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        Post::create([
            'title' => 'Ekspansi PT Sumatera Kemasindo ke Sumedang',
            'content' => 'PT Sumatera kemasindo kini membuka cabang di Sumedang untuk memperluas jangkauan logistik.',
            'image' => 'berita1.jpg',
        ]);
    }
}
