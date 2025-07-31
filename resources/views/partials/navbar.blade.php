<nav class="navbar navbar-expand-lg fixed-top bg-white shadow-sm py-1">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height: 48px; margin-right: 10px;">
            <!-- <span class="fw-bold text-primary fs-5">PT Kemas</span> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="nav-item"><a class="nav-link" href="/layanan">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="/tim">Tim Kami</a></li>
                <li class="nav-item"><a class="nav-link" href="/galeri">Galeri</a></li>

                <!-- Berita -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Berita
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('posts.index') }}">Semua Berita</a></li>
                        @foreach($navCategories as $cat)
                        <li><a class="dropdown-item" href="{{ route('posts.byCategory', $cat->slug) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </li>

                <!-- Produk -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Produk
                    </a>
                    <ul class="dropdown-menu">
                        @foreach($navProductCategories as $cat)
                        <li><a class="dropdown-item" href="{{ route('products.byCategory', $cat->slug) }}">{{ $cat->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>