<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::create([
            'title' => 'Distribusi Barang',
            'description' => 'Layanan distribusi barang cepat dan aman ke seluruh Indonesia.',
        ]);
    }
}
