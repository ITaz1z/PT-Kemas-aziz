@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h2 class="mb-4 text-center text-uppercase">Produk - {{ $category->name }}</h2>

    <!-- Tombol Kategori -->
    <div class="mb-5 text-center">
        @foreach($categories as $cat)
        <a href="{{ route('products.byCategory', $cat->slug) }}"
            class="btn btn-sm {{ $cat->id == $category->id ? 'btn-primary' : 'btn-outline-primary' }} mx-1 mb-2">
            {{ $cat->name }}
        </a>
        @endforeach
    </div>

    <!-- Daftar Produk -->
    @forelse($products as $product)
    <div class="row align-items-center mb-5 pb-4 border-bottom" data-aos="fade-up">
        <div class="col-md-5 mb-3 mb-md-0" data-aos="fade-right">
            <img src="{{ asset('storage/' . $product->image) }}"
                class="gambar-produk"
                alt="{{ $product->name }}"
                style="max-height: 300px; object-fit: cover;">


        </div>
        <div class="col-md-7" data-aos="fade-left">
            <h4 class="fw-bold text-danger mb-3">{{ $product->name }}</h4>
            <p class="text-justify" style="text-align: justify;">
                {!! nl2br(e($product->description)) !!}
            </p>
        </div>
    </div>
    @empty
    <p class="text-center">Belum ada produk pada kategori ini.</p>
    @endforelse
</div>
@endsection