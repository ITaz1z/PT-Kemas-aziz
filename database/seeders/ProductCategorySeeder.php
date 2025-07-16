<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Corrugated Sheet',
            'Corrugated Box',
            'Laminated Paper',
            'Pra-Cetak Corrugated Box',
            'Our Corrugators & Flexo Printing Machine',
        ];

        foreach ($categories as $name) {
            ProductCategory::updateOrCreate(
                ['name' => $name],
                ['slug' => Str::slug($name)]
            );
        }
    }
}
