@extends('layouts.app')

@section('title', 'Corrugated Sheet')

@section('content')
<div class="container">
    <h1 class="mb-4">Corrugated Sheet</h1>

    <img src="{{ asset('images/products/corrugated-sheet.jpg') }}" class="img-fluid rounded mb-4" alt="Corrugated Sheet">

    <p>
        Corrugated Sheet adalah lembaran bergelombang yang digunakan sebagai bahan dasar untuk pembuatan kardus dan kemasan industri.
        Produk ini dibuat dengan teknologi tinggi untuk memastikan kekuatan dan daya tahan yang optimal.
    </p>

    <h5>Spesifikasi Produk:</h5>
    <ul>
        <li>Bahan: Kertas Kraftliner dan Medium</li>
        <li>Ketebalan: 3 mm – 7 mm</li>
        <li>Ukuran: Kustom sesuai kebutuhan</li>
        <li>Warna: Cokelat natural / putih / cetak khusus</li>
    </ul>

    <h5>Aplikasi:</h5>
    <ul>
        <li>Industri kemasan makanan</li>
        <li>Elektronik & otomotif</li>
        <li>Furniture & logistik</li>
    </ul>

    <p>
        Untuk informasi lebih lanjut atau pemesanan, silakan hubungi kami melalui halaman <a href="{{ route('home') }}">Kontak</a>.
    </p>
</div>
@endsection