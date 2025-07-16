<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(): void
    {
        Company::create([
            'name' => 'PT Kemas',
            'description' => 'Perusahaan cabang dari PT Sumatera yang bergerak di bidang logistik dan distribusi.',
            'vision' => 'Menjadi perusahaan distribusi terdepan di Indonesia.',
            'mission' => 'Memberikan layanan terbaik dengan integritas dan profesionalisme.',
            'address' => 'Jl. Contoh No.123, Sumedang',
            'phone' => '021-12345678',
            'email' => 'info@ptkemas.co.id',
            'logo' => 'logo.png'
        ]);
    }
}
