<nav class="navbar navbar-expand-lg fixed-top" id="mainNavbar">
    <div class="container">
        <!-- Brand - Lebih Compact -->
        <a class="navbar-brand d-flex align-items-center" href="/">
            <img src="{{ asset('images/logo.png') }}" alt="PT Kemas Logo">
        </a>

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navigation Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Beranda</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('layanan*') ? 'active' : '' }}" href="/layanan">Layanan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tim*') ? 'active' : '' }}" href="/tim">Tim Kami</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('galeri*') ? 'active' : '' }}" href="/galeri">Galeri</a>
                </li>

                <!-- Berita Dropdown - HOVER ONLY -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('berita*') ? 'active' : '' }}" href="#" role="button">
                        Berita
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('posts.index') }}">
                                <i class="fas fa-list me-2"></i>Semua Berita
                            </a></li>
                        @foreach($navCategories as $cat)
                        <li><a class="dropdown-item" href="{{ route('posts.byCategory', $cat->slug) }}">
                                <i class="fas fa-tag me-2"></i>{{ $cat->name }}
                            </a></li>
                        @endforeach
                    </ul>
                </li>

                <!-- Produk Dropdown - HOVER ONLY -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('produk*') ? 'active' : '' }}" href="#" role="button">
                        Produk
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('products.index') }}">
                                <i class="fas fa-th-large me-2"></i>Semua Produk
                            </a></li>
                        @foreach($navProductCategories as $cat)
                        <li><a class="dropdown-item" href="{{ route('products.byCategory', $cat->slug) }}">
                                <i class="fas fa-cube me-2"></i>{{ $cat->name }}
                            </a></li>
                        @endforeach
                    </ul>
                </li>

                <!-- Contact Button -->
                <li class="nav-item ms-2">
                    <a class="btn btn-contact" href="#contact">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>