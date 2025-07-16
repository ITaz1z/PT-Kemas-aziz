@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p><strong>Kategori:</strong> {{ $product->category->name }}</p>
</div>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
        &copy; {{ date('Y') }} PT Kemas. All rights reserved.
    </div>
</footer>

@endsection