<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run(): void
    {
        $this->call([
            CompanySeeder::class,
            ServiceSeeder::class,
            PostSeeder::class,
            GallerySeeder::class,
            CareerSeeder::class,
            ContactSeeder::class,
            TeamSeeder::class,
            CategorySeeder::class,
            ProductCategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
