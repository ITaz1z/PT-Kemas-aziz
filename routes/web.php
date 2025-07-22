<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
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
// Semua berita
Route::get('/berita', [PostController::class, 'index'])->name('posts.index');

// Detail berita berdasarkan slug
Route::get('/berita/{slug}', [PostController::class, 'show'])->name('posts.show');

// Berita berdasarkan kategori
Route::get('/berita/kategori/{slug}', [PostController::class, 'byCategory'])->name('posts.byCategory');

/*
|--------------------------------------------------------------------------
| Halaman Kategori (Admin atau CMS)
|--------------------------------------------------------------------------
*/
// List kategori
Route::get('/kategori', [CategoryController::class, 'index'])->name('categories.index');

// Tambah kategori
Route::get('/kategori/tambah', [CategoryController::class, 'create'])->name('categories.create');

// Simpan kategori
Route::post('/kategori', [CategoryController::class, 'store'])->name('categories.store');

// Tampilkan detail kategori (bukan untuk berita)
Route::get('/kategori/{slug}', [CategoryController::class, 'show'])->name('categories.show');

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
// Semua produk
Route::get('/produk', [ProductController::class, 'index'])->name('products.index');

// Detail produk berdasarkan slug
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');

// Produk berdasarkan kategori
Route::get('/produk/kategori/{slug}', [ProductController::class, 'byCategory'])->name('products.byCategory');

// Halaman produk khusus (contoh: corrugated sheet)
Route::get('/produk/corrugated-sheet', fn () => view('products.corrugated-sheet'))->name('products.corrugated-sheet');
