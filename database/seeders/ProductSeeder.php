<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Corrugated Sheet Premium',
                'category' => 'Corrugated Sheet',
                'description' => 'PT. Kemas Deli Indo adalah produsen yang juga menghasilkan corrugated sheet berbahan karton. Corrugated sheet karton yang diproduksi digunakan sebagai bahan kemasan, pembungkus, atau box untuk pengiriman barang. Keuntungan dari corrugated sheet karton produksi PT. Kemas Deli Indo meliputi ringan, mudah diproses, ramah lingkungan karena dapat didaur ulang, dan dapat dicetak dengan desain atau label khusus sesuai kebutuhan.',
                'image' => 'products/corrugated-sheet.jpg',
            ],
            [
                'name' => 'Single Wall / Single Face',
                'category' => 'Corrugated Sheet',
                'description' => 'Single wall corrugated sheet memiliki satu lapisan karton bergelombang di antara dua lapisan karton datar, dengan tipe flute B, C, atau E. Keuntungan dari single wall corrugated sheet termasuk biaya produksi rendah, kemudahan pemrosesan, fleksibilitas dalam penggunaan sebagai bahan kemasan, dan kemampuan untuk dicetak dengan label atau desain khusus sesuai kebutuhan pelanggan. Kami dapat memproduksi single wall corrugated sheet dengan spesifikasi yang disesuaikan, termasuk ukuran, tipe flute, dan desain, untuk memenuhi kebutuhan pelanggan.',
                'image' => 'products/single-wall.jpg',
            ],
            [
                'name' => 'Double Wall',
                'category' => 'Corrugated Sheet',
                'description' => 'Double wall corrugated sheet terdiri dari dua lapisan fluting yang dipisahkan oleh tiga lapisan liner. Struktur ini memberikan ketahanan tambahan terhadap tekanan dan benturan, menjadikannya ideal untuk kemasan produk berat atau yang membutuhkan perlindungan ekstra. Kami menyediakan double wall corrugated sheet dalam berbagai kombinasi flute seperti BC, BE, atau AC untuk kebutuhan pengemasan yang berbeda.',
                'image' => 'products/double-wall.jpg',
            ],
            [
                'name' => 'Laminated Box HD',
                'category' => 'Corrugated Box',
                'description' => 'Box dengan kekuatan tambahan dan lapisan laminasi.',
                'image' => 'products/laminated-box.jpg',
            ],
            [
                'name' => 'Pra-Cetak Box',
                'category' => 'Pra-Cetak Corrugated Box',
                'description' => 'Box pra-cetak dengan desain khusus.',
                'image' => 'products/pre-printed-box.jpg',
            ],
            [
                'name' => 'Flexo Printing Machine',
                'category' => 'Our Corrugators & Flexo Printing Machine',
                'description' => 'Mesin cetak flexo untuk produksi karton berkualitas.',
                'image' => 'products/flexo-printing-machine.jpg',
            ],
        ];

        foreach ($products as $data) {
            $category = ProductCategory::where('name', $data['category'])->first();

            if ($category) {
                Product::updateOrCreate(
                    ['name' => $data['name']],
                    [
                        'slug' => Str::slug($data['name']),
                        'description' => $data['description'],
                        'image' => $data['image'],
                        'product_category_id' => $category->id,
                    ]
                );
            }
        }
    }
}
