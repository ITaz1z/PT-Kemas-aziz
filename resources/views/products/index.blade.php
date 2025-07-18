@extends('layouts.app')

@section('title', 'Produk Kami')

@section('content')
<div class="container py-4">
    <h2 class="text-center mb-4">Produk Kami</h2>

    {{-- Tombol Kategori --}}
    <div class="d-flex flex-wrap justify-content-center mb-4 gap-2">
        @foreach ($categories as $cat)
        <a href="{{ route('products.byCategory', $cat->slug) }}"
            class="btn {{ $category->id === $cat->id ? 'btn-primary' : 'btn-outline-primary' }}">
            {{ $cat->name }}
        </a>
        @endforeach
    </div>

    {{-- Daftar Produk --}}
    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-sm">
                @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid rounded shadow">
                @else
                <img src="https://via.placeholder.com/300x200?text=No+Image" class="card-img-top" alt="No Image">
                @endif

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                    <p class="mb-2"><strong>Kategori:</strong> {{ $product->category->name }}</p>
                    <a href="{{ route('products.show', $product->slug) }}" class="btn btn-sm btn-outline-primary mt-auto">Lihat Detail</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-center">
            <p>Belum ada produk untuk kategori ini.</p>
        </div>
        @endforelse
    </div>
</div>
@endsection