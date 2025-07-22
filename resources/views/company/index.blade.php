@extends('layouts.app')

@section('content')

<section class="hero-section">
    <h1>PT Kemas</h1>
    <p>{{ $company->description }}</p>
</section>

<section class="feature-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 feature-box">
                <i class="bi bi-bullseye"></i>
                <h4>Visi</h4>
                <p>{{ $company->vision }}</p>
            </div>
            <div class="col-md-4 feature-box">
                <i class="bi bi-lightbulb"></i>
                <h4>Misi</h4>
                <p>{{ $company->mission }}</p>
            </div>
            <div class="col-md-4 feature-box">
                <i class="bi bi-telephone"></i>
                <h4>Kontak</h4>
                <p>Alamat: {{ $company->address }}</p>
                <p>Telepon: {{ $company->phone }}</p>
                <p>Email: {{ $company->email }}</p>
            </div>
        </div>
    </div>
</section>
@endsection