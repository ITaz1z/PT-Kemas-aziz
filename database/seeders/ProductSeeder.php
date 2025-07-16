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
                'image' => 'corrugated-sheet.jpg',
            ],
            [
                'name' => 'Laminated Box HD',
                'category' => 'Corrugated Box',
                'description' => 'Box dengan kekuatan tambahan dan lapisan laminasi.',
                'image' => 'laminated-box.jpg',
            ],
            // Tambahkan produk lainnya di sini
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
