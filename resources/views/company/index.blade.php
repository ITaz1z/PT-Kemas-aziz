@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="hero position-relative" style="background-image:url('{{ asset('storage/' . trim($company->image)) }}');height:90vh;background-size:cover;background-position:center;">
    <div class="hero-overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.03); z-index:1;"></div>
    <div class="container text-center d-flex flex-column justify-content-center align-items-center h-100 position-relative" style="z-index:2; height:90vh;">
        <h1 class="display-6 fw-bold">PT KEMAS DELI INDO</h1>
        <p class="lead">CORRUGATED PACKAGING INDUSTRY</p>
    </div>
</section>
<style>
    .hero-overlay {
        pointer-events: none;
    }

    /* Ubah nilai rgba di atas untuk mengatur transparansi overlay. Semakin kecil, gambar semakin jelas. */
</style>

{{-- Tentang Perusahaan --}}

<section class="about-us py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Teks -->
            <div class="col-md-6 mb-4 mb-md-0">
                <h2 class="fw-bold mb-4" style="border-left: 6px solid green; padding-left: 15px;">About Us</h2>
                <p>
                    PT KEMAS DELI INDO adalah perusahaan yang memproduksi kemasan industri berkualitas tinggi untuk kebutuhan nasional dan internasional. Kami berkomitmen untuk memberikan layanan terbaik dan menjaga keberlanjutan lingkungan dalam setiap proses produksi.
                </p>
                <a href="{{ url('/about') }}" class="btn btn-outline-danger mt-4 px-4 py-2 fw-semibold">See Detail</a>
            </div>

            <!-- Gambar dari public/images/ -->
            <div class="col-md-6">
                <img src="{{ asset('images/berita1.png') }}" alt="About Us Image" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

{{-- Kontak dan Info --}}
<section class="py-5">
    <div class="container">
        <h2 class="mb-4 text-center">Informasi Kontak</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Alamat:</strong> {{ $company->address ?? '-' }}</li>
                    <li class="list-group-item"><strong>Telepon:</strong> {{ $company->phone ?? '-' }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $company->email ?? '-' }}</li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection