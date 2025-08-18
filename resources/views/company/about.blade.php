@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="hero-about py-5">
    <div class="container text-center" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3">Tentang Kami</h1>
        <p class="lead">Mitra terpercaya untuk solusi kemasan berkualitas tinggi</p>
    </div>
</section>

<!-- Company Profile Section -->
<section class="company-profile py-5">
    <div class="container">
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-lg-6">
                <img src="{{ asset('images/berita1.png') }}" alt="PT Kemas Deli Indo" class="img-fluid rounded shadow-lg">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h2 class="fw-bold text-primary mb-4">PT KEMAS DELI INDO</h2>
                <p class="lead mb-4">
                    Perusahaan cabang strategis yang berlokasi di Sumedang, Jawa Barat, sebagai bagian dari grup PT SUMATERA KEMASINDO yang berpusat di Pekanbaru, Riau.
                </p>
                <p class="mb-4">
                    Kami hadir untuk melayani kebutuhan pasar di wilayah Jawa Barat dan sekitarnya dengan produk kemasan berkualitas tinggi yang memenuhi standar nasional dan internasional.
                </p>
                <div class="row text-center">
                    <div class="col-4">
                        <h4 class="fw-bold text-primary">10+</h4>
                        <small class="text-muted">Tahun Pengalaman</small>
                    </div>
                    <div class="col-4">
                        <h4 class="fw-bold text-primary">500+</h4>
                        <small class="text-muted">Klien Puas</small>
                    </div>
                    <div class="col-4">
                        <h4 class="fw-bold text-primary">100%</h4>
                        <small class="text-muted">Komitmen Kualitas</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="vision-mission py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Visi & Misi</h2>
            <p class="lead text-muted">Landasan utama dalam setiap langkah perjalanan kami</p>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4" data-aos="fade-right">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="vision-icon bg-primary rounded-circle p-3 me-3">
                                <i class="fas fa-eye text-white fs-4"></i>
                            </div>
                            <h3 class="fw-bold text-primary mb-0">Visi</h3>
                        </div>
                        <p class="mb-0">
                            Menjadi perusahaan kemasan terdepan di wilayah Jawa Barat yang memberikan solusi inovatif dan berkualitas tinggi untuk berbagai industri.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4" data-aos="fade-left">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="mission-icon bg-success rounded-circle p-3 me-3">
                                <i class="fas fa-bullseye text-white fs-4"></i>
                            </div>
                            <h3 class="fw-bold text-success mb-0">Misi</h3>
                        </div>
                        <ul class="list-unstyled mb-0">
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Menyediakan produk dan layanan kemasan berkualitas tinggi</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Memberikan pelayanan terbaik dengan teknologi modern</li>
                            <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Berkontribusi dalam pengembangan ekonomi lokal</li>
                            <li class="mb-0"><i class="fas fa-check text-success me-2"></i>Menjalankan bisnis berkelanjutan dan ramah lingkungan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Competitive Advantages Section -->
<section class="advantages py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold text-primary">Keunggulan Kompetitif</h2>
            <p class="lead text-muted">Mengapa memilih PT Kemas Deli Indo sebagai mitra bisnis Anda</p>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center advantage-item">
                    <div class="advantage-icon bg-primary rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-handshake text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold text-primary mb-3">Dukungan Grup Perusahaan</h4>
                    <p class="text-muted">
                        Didukung oleh pengalaman dan expertise dari PT SUMATERA KEMASINDO dengan teknologi terkini dan jaringan distribusi yang luas.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center advantage-item">
                    <div class="advantage-icon bg-success rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-map-marker-alt text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold text-success mb-3">Lokasi Strategis</h4>
                    <p class="text-muted">
                        Berlokasi di Sumedang, jalur strategis Jawa Barat untuk melayani Jakarta, Bandung, dan kota-kota besar lainnya dengan efisien.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center advantage-item">
                    <div class="advantage-icon bg-info rounded-circle p-4 mx-auto mb-3">
                        <i class="fas fa-users text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold text-info mb-3">Tim Profesional</h4>
                    <p class="text-muted">
                        Didukung oleh tim berpengalaman dan terlatih dalam industri kemasan, siap memberikan solusi terbaik sesuai kebutuhan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Commitment Section -->
<section class="commitment py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-3">Komitmen Kami</h2>
            <p class="lead">Dedikasi penuh untuk memberikan yang terbaik bagi setiap pelanggan</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center commitment-item">
                    <i class="fas fa-award fs-1 mb-3"></i>
                    <h5 class="fw-bold">Kualitas Terjamin</h5>
                    <p class="mb-0">Mengutamakan kualitas produk dan kepuasan pelanggan</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center commitment-item">
                    <i class="fas fa-shield-alt fs-1 mb-3"></i>
                    <h5 class="fw-bold">Standar Keamanan</h5>
                    <p class="mb-0">Menerapkan standar keamanan dan lingkungan yang ketat</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center commitment-item">
                    <i class="fas fa-lightbulb fs-1 mb-3"></i>
                    <h5 class="fw-bold">Inovasi Berkelanjutan</h5>
                    <p class="mb-0">Berinovasi secara berkelanjutan dalam pengembangan produk</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center commitment-item">
                    <i class="fas fa-heart fs-1 mb-3"></i>
                    <h5 class="fw-bold">Kemitraan Jangka Panjang</h5>
                    <p class="mb-0">Membangun kemitraan jangka panjang dengan seluruh stakeholder</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="cta-about py-5">
    <div class="container text-center" data-aos="fade-up">
        <h2 class="fw-bold mb-3">Siap Berkolaborasi dengan Kami?</h2>
        <p class="lead mb-4">
            Dengan dukungan penuh dari PT SUMATERA KEMASINDO dan komitmen terhadap excellence,
            PT KEMAS DELI INDO siap menjadi mitra terpercaya untuk kebutuhan kemasan Anda.
        </p>
        <a href="{{ route('home') }}#contact" class="btn btn-primary btn-lg px-5">
            <i class="fas fa-phone me-2"></i>Hubungi Kami Sekarang
        </a>
    </div>
</section>
@endsection