@extends('layouts.app')

@section('content')
<section class="about-section py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="mb-4 text-center fw-bold">Tentang Kami</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/berita1.png') }}" alt="About Us Image" class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6 mt-4 mt-md-0">
                <p>
                    PT Kemas adalah perusahaan yang bergerak di bidang ... (silakan isi deskripsi perusahaan kamu di sini).
                </p>
                <p>
                    Kami berkomitmen untuk memberikan layanan terbaik dalam bidang ... dan senantiasa mengedepankan kualitas, profesionalitas, serta inovasi.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection