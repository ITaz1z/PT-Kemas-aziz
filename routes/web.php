<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Halaman Utama
|--------------------------------------------------------------------------
*/

Route::get('/', [CompanyController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Halaman Layanan
|--------------------------------------------------------------------------
*/
Route::get('/layanan', [ServiceController::class, 'index'])->name('services');

/*
|--------------------------------------------------------------------------
| Halaman Tim
|--------------------------------------------------------------------------
*/
Route::get('/tim', [TeamController::class, 'index'])->name('team');

/*
|--------------------------------------------------------------------------
| Halaman Berita
|--------------------------------------------------------------------------
*/
Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita/csr', [PostController::class, 'csr'])->name('posts.csr');
Route::get('/berita/donasi', [PostController::class, 'donasi'])->name('posts.donasi');
Route::get('/berita/family', [PostController::class, 'family'])->name('posts.family');
Route::get('/berita/pelatihan', [PostController::class, 'pelatihan'])->name('posts.pelatihan');


Route::get('/berita/{id}', [PostController::class, 'show'])->name('posts.show');

// Perhatikan: tidak boleh pakai nama route yang sama
Route::get('/berita/kategori/id/{id}', [PostController::class, 'filterByCategory'])->name('posts.byCategoryId');
Route::get('/berita/kategori/{slug}', [PostController::class, 'byCategory'])->name('posts.byCategory');

/*
|--------------------------------------------------------------------------
| Halaman Galeri
|--------------------------------------------------------------------------
*/
Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries');

/*
|--------------------------------------------------------------------------
| Halaman Produk
|--------------------------------------------------------------------------
*/
// Gunakan penamaan standar RESTful
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produk/kategori/{slug}', [ProductController::class, 'byCategory'])->name('products.byCategory');

// Untuk halaman produk khusus (seperti corrugated-sheet)
Route::get('/produk/corrugated-sheet', fn() => view('products.corrugated-sheet'))->name('products.corrugated-sheet');

// 