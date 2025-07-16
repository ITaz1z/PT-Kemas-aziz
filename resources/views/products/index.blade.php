@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Produk Kami</h2>

    <ul class="nav nav-pills mb-3">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}" href="{{ route('products') }}">Semua</a>
        </li>
        @foreach ($categories as $cat)
            <li class="nav-item">
                <a class="nav-link {{ isset($category) && $category->id == $cat->id ? 'active' : '' }}" href="{{ route('products.byCategory', $cat->slug) }}">
                    {{ $cat->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <div class="row">
        @foreach ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5>{{ $product->name }}</h5>
                    <p>{{ $product->description }}</p>
                    <p><strong>Kategori:</strong> {{ $product->category->name }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
