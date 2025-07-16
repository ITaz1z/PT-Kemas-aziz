<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProductController;

Route::get('/', [CompanyController::class, 'index'])->name('home');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services');

Route::get('/tim', [TeamController::class, 'index'])->name('team');

Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita', [PostController::class, 'index'])->name('posts');
Route::get('/berita/csr', [PostController::class, 'csr'])->name('posts.csr');
Route::get('/berita/donasi', [PostController::class, 'donasi'])->name('posts.donasi');
Route::get('/berita/family', [PostController::class, 'family'])->name('posts.family');
Route::get('/berita/pelatihan', [PostController::class, 'pelatihan'])->name('posts.pelatihan');


Route::get('/berita/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/berita/kategori/{id}', [PostController::class, 'filterByCategory'])->name('posts.byCategory');
Route::get('/berita/kategori/{slug}', [PostController::class, 'byCategory'])->name('posts.byCategory');

Route::get('/galeri', [GalleryController::class, 'index'])->name('galleries');

Route::get('/berita/kategori/{id}', [PostController::class, 'filterByCategory'])->name('posts.byCategory');
Route::get('/berita/kategori/{slug}', [PostController::class, 'byCategory'])->name('posts.byCategory');

Route::get('/produk', [ProductController::class, 'index'])->name('products.index');
Route::get('/produk/kategori/{slug}', [ProductController::class, 'byCategory'])->name('products.byCategory');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/produk/corrugated-sheet', function () {
    return view('products.corrugated-sheet');
})->name('products.corrugated-sheet');
