@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}"
                class="gambar-produk"
                alt="{{ $product->name }}"
                style="max-height: 300px; object-fit: cover;">


            @else
            <img src="https://via.placeholder.com/500x300?text=No+Image" class="img-fluid rounded shadow" alt="No Image">
            @endif
        </div>
        <div class="col-md-6">
            <h1 class="mb-3">{{ $product->name }}</h1>
            <p><strong>Kategori:</strong> {{ $product->category->name }}</p>
            <p class="text-muted">{{ $product->description }}</p>
        </div>
    </div>

    @if($product->specs)
    <div class="mt-5">
        <h4>Spesifikasi Teknis</h4>
        <div class="bg-light p-3 rounded">
            {!! nl2br(e($product->specs)) !!}
        </div>
    </div>
    @endif

    @if($product->advantages)
    <div class="mt-4">
        <h4>Keunggulan Produk</h4>
        <ul>
            @foreach (explode("\n", $product->advantages) as $item)
            <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>
@endsection