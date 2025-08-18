@extends('layouts.app')

@section('content')

{{-- Hero Section --}}
<section class="hero position-relative" style="background-image:url('{{ asset('storage/' . trim($company->image ?? 'default-bg.jpg')) }}');height:90vh;background-size:cover;background-position:center;" data-aos="fade-in">
    <div class="hero-overlay" style="position: absolute; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.4); z-index:1;"></div>
    <div class="container text-center d-flex flex-column justify-content-center align-items-center h-100 position-relative" style="z-index:2; height:90vh;">
        <h1 class="display-3 fw-bold mb-4" data-aos="fade-up" data-aos-delay="200">PT KEMAS DELI INDO</h1>
        <p class="lead fs-4 mb-4" data-aos="fade-up" data-aos-delay="400">SOLUSI KEMASAN CORRUGATED TERDEPAN</p>
        <p class="fs-5 mb-5 opacity-75" data-aos="fade-up" data-aos-delay="600">Kualitas Tinggi • Pelayanan Terbaik • Ramah Lingkungan</p>
        <div class="d-flex gap-3 flex-wrap justify-content-center" data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('/about') }}" class="btn btn-light btn-lg px-4 py-3 fw-semibold shadow">
                <i class="fas fa-info-circle me-2"></i>Tentang Kami
            </a>
        </div>
    </div>
</section>

{{-- Stats Section --}}
<section class="py-5 bg-primary text-white">
    <div class="container" data-aos="fade-up">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <div class="stats-item">
                    <i class="fas fa-building fs-1 mb-3 text-warning"></i>
                    <h3 class="fw-bold counter">15</h3>
                    <p class="mb-0">Tahun Pengalaman</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stats-item">
                    <i class="fas fa-users fs-1 mb-3 text-warning"></i>
                    <h3 class="fw-bold counter">500</h3>
                    <p class="mb-0">Klien Puas</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stats-item">
                    <i class="fas fa-boxes fs-1 mb-3 text-warning"></i>
                    <h3 class="fw-bold counter">1000</h3>
                    <p class="mb-0">Produk Berkualitas</p>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <div class="stats-item">
                    <i class="fas fa-award fs-1 mb-3 text-warning"></i>
                    <h3 class="fw-bold">ISO</h3>
                    <p class="mb-0">Sertifikat Standar</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- About Us Section --}}
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- Teks -->
            <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                <div class="mb-4">
                    <span class="badge bg-primary fs-6 px-3 py-2 mb-3">Tentang Kami</span>
                    <h2 class="display-5 fw-bold mb-4 text-primary">
                        Mitra Terpercaya untuk Solusi Kemasan
                    </h2>
                </div>
                <p class="fs-5 text-muted mb-4 lh-lg">
                    PT KEMAS DELI INDO adalah perusahaan yang berdedikasi dalam memproduksi kemasan corrugated berkualitas tinggi. Sebagai bagian dari grup PT SUMATERA KEMASINDO, kami menghadirkan inovasi dan keunggulan dalam setiap produk.
                </p>

                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <span class="fw-semibold">Kualitas Terjamin</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <span class="fw-semibold">Pelayanan 24/7</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <span class="fw-semibold">Ramah Lingkungan</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success rounded-circle p-2 me-3">
                                <i class="fas fa-check text-white"></i>
                            </div>
                            <span class="fw-semibold">Harga Kompetitif</span>
                        </div>
                    </div>
                </div>

                <a href="{{ url('/about') }}" class="btn btn-primary btn-lg px-4 py-3 fw-semibold shadow">
                    <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                </a>
            </div>

            <!-- Gambar -->
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="{{ asset('images/berita1.png') }}"
                        alt="PT Kemas Deli Indo"
                        class="img-fluid rounded shadow-lg">

                    <!-- Overlay transparan (lebih halus) -->
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded"
                        style="background: linear-gradient(180deg, rgba(0, 123, 255, 0.15), rgba(0, 123, 255, 0.05));">
                    </div>
                </div>
            </div>
</section>

{{-- Services Preview Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary fs-6 px-3 py-2 mb-3">Layanan Kami</span>
            <h2 class="display-5 fw-bold text-primary mb-4">Solusi Kemasan Terlengkap</h2>
            <p class="fs-5 text-muted">Kami menyediakan berbagai jenis kemasan sesuai kebutuhan industri Anda</p>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body p-4 text-center">
                        <div class="bg-primary rounded-circle p-4 mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-box text-white fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Corrugated Box</h4>
                        <p class="text-muted mb-4">Kemasan karton bergelombang yang kuat dan tahan lama untuk berbagai keperluan industri dan pengiriman.</p>
                        <a href="{{ url('/layanan') }}" class="btn btn-outline-primary fw-semibold">Pelajari Lebih</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body p-4 text-center">
                        <div class="bg-success rounded-circle p-4 mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-layer-group text-white fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Corrugated Sheet</h4>
                        <p class="text-muted mb-4">Lembaran karton bergelombang berkualitas tinggi yang dapat disesuaikan dengan kebutuhan spesifik.</p>
                        <a href="{{ url('/layanan') }}" class="btn btn-outline-success fw-semibold">Pelajari Lebih</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 service-card">
                    <div class="card-body p-4 text-center">
                        <div class="bg-info rounded-circle p-4 mx-auto mb-4" style="width: 80px; height: 80px;">
                            <i class="fas fa-palette text-white fs-2"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Custom Design</h4>
                        <p class="text-muted mb-4">Desain kemasan khusus sesuai brand dan kebutuhan pemasaran produk Anda.</p>
                        <a href="{{ url('/layanan') }}" class="btn btn-outline-info fw-semibold">Pelajari Lebih</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ url('/layanan') }}" class="btn btn-primary btn-lg px-5 py-3 fw-semibold">
                <i class="fas fa-th-large me-2"></i>Lihat Semua Layanan
            </a>
        </div>
    </div>
</section>

{{-- Why Choose Us Section --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="badge bg-primary fs-6 px-3 py-2 mb-3">Keunggulan Kami</span>
            <h2 class="display-5 fw-bold text-primary mb-4">Mengapa Memilih PT Kemas Deli Indo?</h2>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="text-center advantage-item p-4">
                    <div class="advantage-icon bg-primary rounded-circle p-4 mx-auto mb-4">
                        <i class="fas fa-medal text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Kualitas Premium</h4>
                    <p class="text-muted">Menggunakan bahan berkualitas tinggi dan proses produksi yang terkontrol ketat.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="text-center advantage-item p-4">
                    <div class="advantage-icon bg-success rounded-circle p-4 mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Pengiriman Cepat</h4>
                    <p class="text-muted">Sistem logistik yang efisien untuk memastikan produk sampai tepat waktu.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="text-center advantage-item p-4">
                    <div class="advantage-icon bg-info rounded-circle p-4 mx-auto mb-4">
                        <i class="fas fa-headset text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Support 24/7</h4>
                    <p class="text-muted">Tim customer service yang siap membantu kapan saja Anda membutuhkan.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="text-center advantage-item p-4">
                    <div class="advantage-icon bg-warning rounded-circle p-4 mx-auto mb-4">
                        <i class="fas fa-leaf text-white fs-2"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Ramah Lingkungan</h4>
                    <p class="text-muted">Berkomitmen pada keberlanjutan dengan material yang dapat didaur ulang.</p>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Latest News Section --}}
<section class="py-5 bg-light">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5" data-aos="fade-up">
            <div>
                <span class="badge bg-primary fs-6 px-3 py-2 mb-3">Berita Terbaru</span>
                <h2 class="display-5 fw-bold text-primary mb-0">Informasi & Update</h2>
            </div>
            <a href="{{ route('posts.index') }}" class="btn btn-outline-primary fw-semibold d-none d-md-block">
                <i class="fas fa-newspaper me-2"></i>Lihat Semua
            </a>
        </div>

        <div class="row">
            <!-- Ini bisa diisi dengan data berita dari database -->
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/berita1.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Berita">
                    <div class="card-body p-4">
                        <span class="badge bg-primary mb-2">Industri</span>
                        <h5 class="fw-bold mb-3">Inovasi Terbaru dalam Kemasan Corrugated</h5>
                        <p class="text-muted mb-3">Teknologi terdepan yang kami terapkan untuk menghasilkan kemasan berkualitas superior...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>{{ date('d M Y') }}
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/berita1.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Berita">
                    <div class="card-body p-4">
                        <span class="badge bg-success mb-2">Lingkungan</span>
                        <h5 class="fw-bold mb-3">Komitmen Lingkungan PT Kemas Deli Indo</h5>
                        <p class="text-muted mb-3">Program keberlanjutan dan upaya pelestarian lingkungan yang kami jalankan...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>{{ date('d M Y', strtotime('-2 days')) }}
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-success">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100">
                    <img src="{{ asset('images/berita1.png') }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Berita">
                    <div class="card-body p-4">
                        <span class="badge bg-info mb-2">Perusahaan</span>
                        <h5 class="fw-bold mb-3">Ekspansi Pasar ke Wilayah Baru</h5>
                        <p class="text-muted mb-3">Rencana pengembangan bisnis dan jangkauan pelayanan yang lebih luas...</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="fas fa-calendar me-1"></i>{{ date('d M Y', strtotime('-5 days')) }}
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-info">Baca Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 d-md-none" data-aos="fade-up">
            <a href="{{ route('posts.index') }}" class="btn btn-primary fw-semibold">
                <i class="fas fa-newspaper me-2"></i>Lihat Semua Berita
            </a>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="contact" class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0" data-aos="fade-right">
                <h2 class="display-5 fw-bold mb-3">Siap Berkolaborasi?</h2>
                <p class="fs-5 mb-4">Hubungi kami untuk konsultasi dan penawaran terbaik sesuai kebutuhan Anda.</p>
            </div>
            <div class="col-lg-4 text-lg-end" data-aos="fade-left">
                <a href="tel:{{ $company->phone ?? '+62123456789' }}" class="btn btn-light btn-lg px-4 py-3 fw-semibold me-3 mb-3">
                    <i class="fas fa-phone me-2"></i>Hubungi Kami
                </a>
                <a href="mailto:{{ $company->email ?? 'info@kemassindo.com' }}" class="btn btn-outline-light btn-lg px-4 py-3 fw-semibold mb-3">
                    <i class="fas fa-envelope me-2"></i>Email
                </a>
            </div>
        </div>

        <div class="row mt-5" data-aos="fade-up">
            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="bg-warning rounded-circle p-3 me-3">
                        <i class="fas fa-map-marker-alt text-dark fs-5"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Alamat</h5>
                        <p class="mb-0">{{ $company->address ?? 'Sumedang, Jawa Barat, Indonesia' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="bg-warning rounded-circle p-3 me-3">
                        <i class="fas fa-phone text-dark fs-5"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Telepon</h5>
                        <p class="mb-0">{{ $company->phone ?? '+62 123 456 789' }}</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="d-flex align-items-start">
                    <div class="bg-warning rounded-circle p-3 me-3">
                        <i class="fas fa-envelope text-dark fs-5"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">Email</h5>
                        <p class="mb-0">{{ $company->email ?? 'info@kemassindo.com' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@push('styles')
<style>
    .service-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .stats-item {
        transition: transform 0.3s ease;
    }

    .stats-item:hover {
        transform: translateY(-5px);
    }

    .counter {
        font-size: 2.5rem;
        color: #ffd700;
    }
</style>
@endpush