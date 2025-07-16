<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    // database/migrations/xxxx_create_product_categories_table.php
{
    Schema::create('product_categories', function (Blueprint $table) {
        $table->id();                       // BIGINT unsigned
        $table->string('name');
        $table->string('slug')->unique();
        $table->timestamps();
    });
}


    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
