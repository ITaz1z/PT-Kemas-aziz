
@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="hero position-relative" style="background-image:url('{{ asset('storage/' . trim($company->image)) }}');height:90vh;background-size:cover;background-position:center;">
    <div class="hero-overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.03); z-index:1;"></div>
    <div class="container text-center d-flex flex-column justify-content-center align-items-center h-100 position-relative" style="z-index:2; height:90vh;">
        <h1 class="display-4 fw-bold">PT Kemas</h1>
        <p class="lead">Perusahaan cabang dari PT Sumatera yang bergerak di bidang logistik dan distribusi.</p>
    </div>
</section>
<style>
    .hero-overlay { pointer-events: none; }
    /* Ubah nilai rgba di atas untuk mengatur transparansi overlay. Semakin kecil, gambar semakin jelas. */
</style>

{{-- Tentang Perusahaan --}}
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="mb-4 text-center">Tentang Kami</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <h5>Visi</h5>
                <p>{{ $company->vision ?? '-' }}</p>
            </div>
            <div class="col-md-6 mb-4">
                <h5>Misi</h5>
                <p>{{ $company->mission ?? '-' }}</p>
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