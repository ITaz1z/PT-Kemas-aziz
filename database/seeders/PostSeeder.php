<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Pastikan ada kategori sesuai kebutuhan perusahaan packaging
        $categories = [
            ['name' => 'Berita', 'slug' => 'berita'],
            ['name' => 'CSR', 'slug' => 'csr'],
            ['name' => 'Acara Kepegawaian', 'slug' => 'acara-kepegawaian'],
            ['name' => 'Pengumuman', 'slug' => 'pengumuman'],
        ];

        // Buat kategori jika belum ada
        foreach ($categories as $categoryData) {
            Category::firstOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData
            );
        }

        // Ambil kategori yang sudah ada
        $berita = Category::where('slug', 'berita')->first();
        $csr = Category::where('slug', 'csr')->first();
        $acara = Category::where('slug', 'acara-kepegawaian')->first();
        $pengumuman = Category::where('slug', 'pengumuman')->first();

        // Data berita untuk perusahaan packaging
        $samplePosts = [
            // Kategori Berita
            [
                'title' => 'PT Kemas Deli Indo Raih Sertifikat ISO 14001:2015',
                'slug' => 'pt-kemas-deli-indo-raih-sertifikat-iso-14001-2015',
                'content' => 'PT Kemas Deli Indo berhasil meraih sertifikat ISO 14001:2015 untuk sistem manajemen lingkungan. Sertifikat ini membuktikan komitmen perusahaan dalam menjaga kelestarian lingkungan melalui proses produksi kemasan yang ramah lingkungan. Dengan sertifikat ini, PT Kemas Deli Indo semakin memperkuat posisinya sebagai produsen kemasan terpercaya di Indonesia.',
                'category_id' => $berita->id,
                'image' => 'posts/berita-iso-sertifikat.jpg',
            ],
            [
                'title' => 'Ekspansi Pabrik Baru di Kawasan Industri Sumedang',
                'slug' => 'ekspansi-pabrik-baru-di-kawasan-industri-sumedang',
                'content' => 'PT Kemas Deli Indo mengumumkan pembangunan pabrik baru di Kawasan Industri Sumedang dengan investasi Rp 150 miliar. Pabrik baru ini akan fokus pada produksi kemasan corrugated box dan flexible packaging untuk memenuhi permintaan pasar yang terus meningkat. Diperkirakan beroperasi penuh pada kuartal kedua 2025.',
                'category_id' => $berita->id,
                'image' => 'posts/berita-pabrik-baru.jpg',
            ],
            [
                'title' => 'Inovasi Kemasan Biodegradable untuk Industri Makanan',
                'slug' => 'inovasi-kemasan-biodegradable-untuk-industri-makanan',
                'content' => 'Tim R&D PT Kemas Deli Indo berhasil mengembangkan kemasan biodegradable yang dapat terurai dalam 6 bulan. Kemasan ramah lingkungan ini khusus dirancang untuk industri makanan dan minuman, menggantikan kemasan plastik konvensional. Produk inovasi ini telah mendapat sertifikat BPOM dan siap dipasarkan tahun depan.',
                'category_id' => $berita->id,
                'image' => 'posts/berita-biodegradable.jpg',
            ],

            // Kategori CSR
            [
                'title' => 'Program Daur Ulang Kemasan Bersama Komunitas',
                'slug' => 'program-daur-ulang-kemasan-bersama-komunitas',
                'content' => 'PT Kemas Deli Indo meluncurkan program CSR "Kemasan Hijau" bekerja sama dengan 15 komunitas daur ulang di sekitar pabrik. Program ini mengajarkan masyarakat cara mendaur ulang kemasan bekas menjadi produk bernilai ekonomi. Target program ini adalah mengolah 10 ton sampah kemasan per bulan dan memberikan penghasilan tambahan bagi masyarakat.',
                'category_id' => $csr->id,
                'image' => 'posts/csr-daur-ulang.jpg',
            ],
            [
                'title' => 'Bantuan Beasiswa untuk Anak Pekerja Pabrik',
                'slug' => 'bantuan-beasiswa-untuk-anak-pekerja-pabrik',
                'content' => 'Program beasiswa "Generasi Cerdas Kemas Deli" memberikan bantuan pendidikan kepada 50 anak karyawan berprestasi. Beasiswa mencakup biaya sekolah, seragam, dan perlengkapan belajar hingga lulus SMA. Program ini merupakan komitmen perusahaan dalam meningkatkan kualitas pendidikan anak-anak karyawan.',
                'category_id' => $csr->id,
                'image' => 'posts/csr-beasiswa.jpg',
            ],

            // Kategori Acara Kepegawaian
            [
                'title' => 'Pelatihan Keselamatan Kerja K3 untuk Seluruh Karyawan',
                'slug' => 'pelatihan-keselamatan-kerja-k3-untuk-seluruh-karyawan',
                'content' => 'PT Kemas Deli Indo mengadakan pelatihan K3 (Keselamatan dan Kesehatan Kerja) untuk 500 karyawan di seluruh unit produksi. Pelatihan ini mencakup penggunaan APD, prosedur keselamatan mesin, dan penanganan emergency. Acara berlangsung selama 3 hari dengan instruktur bersertifikat dari BNSP.',
                'category_id' => $acara->id,
                'image' => 'posts/acara-k3-training.jpg',
            ],
            [
                'title' => 'Family Gathering Karyawan 2024 di Taman Safari Bogor',
                'slug' => 'family-gathering-karyawan-2024-di-taman-safari-bogor',
                'content' => 'Acara family gathering tahunan dihadiri oleh 800 karyawan beserta keluarga di Taman Safari Bogor. Acara ini mengusung tema "Satu Keluarga Besar Kemas Deli" dengan berbagai kegiatan menarik seperti games, doorprize, dan pertunjukan musik. Acara ini bertujuan mempererat tali silaturahmi antar karyawan dan keluarga.',
                'category_id' => $acara->id,
                'image' => 'posts/acara-family-gathering.jpg',
            ],

            // Kategori Pengumuman
            [
                'title' => 'Pengumuman Libur Nasional dan Cuti Bersama 2024',
                'slug' => 'pengumuman-libur-nasional-dan-cuti-bersama-2024',
                'content' => 'Berdasarkan SKB 3 Menteri tentang hari libur nasional dan cuti bersama tahun 2024, PT Kemas Deli Indo mengumumkan jadwal libur: Libur Idul Fitri tanggal 10-15 April 2024, Libur Natal dan Tahun Baru 23-31 Desember 2024. Selama libur, operasional pabrik akan berhenti total dan dimulai kembali sesuai jadwal.',
                'category_id' => $pengumuman->id,
                'image' => 'posts/pengumuman-libur.jpg',
            ],
            [
                'title' => 'Rekrutmen Karyawan untuk Posisi Operator Mesin Packaging',
                'slug' => 'rekrutmen-karyawan-untuk-posisi-operator-mesin-packaging',
                'content' => 'PT Kemas Deli Indo membuka lowongan kerja untuk 25 posisi Operator Mesin Packaging. Persyaratan: pendidikan minimal SMA/SMK, usia 18-35 tahun, pengalaman di bidang packaging minimal 1 tahun. Lamaran dapat dikirim ke HRD@kemasdeli.co.id atau langsung ke kantor HRD. Pendaftaran dibuka hingga 31 Agustus 2024.',
                'category_id' => $pengumuman->id,
                'image' => 'posts/pengumuman-recruitment.jpg',
            ],
        ];

        // Buat posts
        foreach ($samplePosts as $postData) {
            Post::create([
                'title' => $postData['title'],
                'slug' => $postData['slug'],
                'content' => $postData['content'],
                'category_id' => $postData['category_id'],
                'image' => $postData['image'] ?? null,
                'is_published' => true,
                'created_at' => now()->subDays(rand(1, 60)),
                'updated_at' => now()->subDays(rand(0, 10)),
            ]);
        }

        echo "Berhasil membuat " . count($samplePosts) . " posts untuk PT Kemas Deli Indo!\n";
    }
}
