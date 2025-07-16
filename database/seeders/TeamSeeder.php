<?php

namespace Database\Seeders;

use App\Models\Team;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{

    public function run(): void
    {
        Team::create([
            'name' => 'nama direktur',
            'position' => 'Direktur',
            'photo' => 'namadirektur.jpg',
            'bio' => 'Memimpin PT KEMAS Sejak tahun 2024 dan berpengalaman'
        ]);

        Team::create([
            'name' => 'nama IT Support',
            'position' => 'IT Support',
            'photo' => 'namait.jpg',
            'bio' => 'Bertanggung jawab atas pengelolaan sistem dan infrastruktur IT.',
        ]);
    }
}
