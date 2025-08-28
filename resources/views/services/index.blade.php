@extends('layouts.app')

@section('title', 'Layanan Kami')

@section('content')
<div class="services-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="services-title">Layanan Packaging Terbaik</h1>
                <p class="services-subtitle">Solusi kemasan karton berkualitas tinggi untuk berbagai kebutuhan bisnis Anda</p>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <!-- Main Services Section -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="section-title">Layanan Utama Kami</h2>
            <p class="section-subtitle">Dari desain hingga produksi, kami menyediakan layanan packaging komprehensif</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <!-- Custom Design -->
        <div class="col-lg-4 col-md-6">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-pencil-ruler"></i>
                </div>
                <h4 class="service-title">Custom Design</h4>
                <p class="service-description">Tim desainer profesional kami siap membuat desain kemasan yang unik dan menarik sesuai brand identity Anda.</p>
                <ul class="service-features">
                    <li>Konsultasi desain gratis</li>
                    <li>Revisi unlimited</li>
                    <li>File siap cetak</li>
                </ul>
            </div>
        </div>

        <!-- Produksi Karton -->
        <div class="col-lg-4 col-md-6">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-industry"></i>
                </div>
                <h4 class="service-title">Produksi Karton</h4>
                <p class="service-description">Produksi kemasan karton dengan berbagai ukuran dan spesifikasi menggunakan teknologi modern.</p>
                <ul class="service-features">
                    <li>Berbagai jenis karton</li>
                    <li>Kapasitas besar</li>
                    <li>Quality control ketat</li>
                </ul>
            </div>
        </div>

        <!-- Printing & Finishing -->
        <div class="col-lg-4 col-md-6">
            <div class="service-card">
                <div class="service-icon">
                    <i class="fas fa-print"></i>
                </div>
                <h4 class="service-title">Printing & Finishing</h4>
                <p class="service-description">Layanan cetak berkualitas tinggi dengan berbagai pilihan finishing untuk hasil yang sempurna.</p>
                <ul class="service-features">
                    <li>Offset & digital printing</li>
                    <li>Laminating & UV coating</li>
                    <li>Emboss & deboss</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Product Categories -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="section-title">Kategori Produk</h2>
            <p class="section-subtitle">Kami melayani berbagai jenis kemasan untuk industri yang beragam</p>
        </div>
    </div>

    <div class="row g-4 mb-5">
        <div class="col-lg-3 col-md-6">
            <div class="category-card">
                <div class="category-image">
                    <i class="fas fa-utensils"></i>
                </div>
                <h5>Food & Beverage</h5>
                <p>Kemasan food grade untuk produk makanan dan minuman</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="category-card">
                <div class="category-image">
                    <i class="fas fa-shopping-bag"></i>
                </div>
                <h5>Retail & E-commerce</h5>
                <p>Box pengiriman dan kemasan retail yang menarik</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="category-card">
                <div class="category-image">
                    <i class="fas fa-cogs"></i>
                </div>
                <h5>Industrial</h5>
                <p>Kemasan industri untuk produk berat dan khusus</p>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="category-card">
                <div class="category-image">
                    <i class="fas fa-gift"></i>
                </div>
                <h5>Luxury & Gift</h5>
                <p>Kemasan premium untuk produk mewah dan gift</p>
            </div>
        </div>
    </div>

    <!-- Process Section -->
    <div class="row mb-5">
        <div class="col-12 text-center mb-4">
            <h2 class="section-title">Proses Kerja Kami</h2>
            <p class="section-subtitle">Langkah mudah untuk mendapatkan kemasan impian Anda</p>
        </div>
    </div>

    <div class="process-timeline">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h6>Konsultasi</h6>
                    <p>Diskusi kebutuhan packaging</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h6>Desain</h6>
                    <p>Pembuatan desain sesuai brief</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h6>Sample</h6>
                    <p>Produksi sample untuk approval</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">4</div>
                    <h6>Produksi</h6>
                    <p>Produksi massal sesuai qty</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">5</div>
                    <h6>QC</h6>
                    <p>Quality control & packaging</p>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-6">
                <div class="process-step">
                    <div class="step-number">6</div>
                    <h6>Delivery</h6>
                    <p>Pengiriman tepat waktu</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="cta-section text-center mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2>Siap Memulai Proyek Packaging Anda?</h2>
                <p>Hubungi tim kami untuk konsultasi gratis dan dapatkan penawaran terbaik</p>
                <div class="cta-buttons">
                    <a href="/contact" class="btn btn-primary btn-lg me-3">Hubungi Kami</a>
                    <a href="/portfolio" class="btn btn-outline-primary btn-lg">Lihat Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection