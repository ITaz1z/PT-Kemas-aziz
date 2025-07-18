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
                'description' => 'Produk lembaran karton bergelombang berkualitas tinggi.',
                'image' => 'products/corrugated-sheet.jpg',
            ],
            [
                'name' => 'Laminated Box HD',
                'category' => 'Corrugated Box',
                'description' => 'Box dengan kekuatan tambahan dan lapisan laminasi.',
                'image' => 'products/laminated-box.jpg',
            ],
            //tambahkan produk lainnya sesuai kebutuhan
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
