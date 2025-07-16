<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'PT Kemas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">PT Kemas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">

                    {{-- BERANDA --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>

                    {{-- LAYANAN --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}" href="{{ route('services') }}">Layanan</a>
                    </li>

                    {{-- TIM --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">Tim Kami</a>
                    </li>

                    {{-- GALERI --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('galleries') ? 'active' : '' }}" href="{{ route('galleries') }}">Galeri</a>
                    </li>

                    {{-- BERITA (dropdown kategori) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('berita*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Berita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('posts') }}">Semua Berita</a></li>
                            @foreach($navCategories as $newsCat)
                            <li><a class="dropdown-item" href="{{ route('posts.byCategory', $newsCat->slug) }}">{{ $newsCat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    {{-- PRODUK (dropdown kategori) --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('produk*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Produk
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('products.index') }}">Semua Produk</a></li>
                            @foreach($navProductCategories as $pCat)
                            <li><a class="dropdown-item" href="{{ route('products.byCategory', $pCat->slug) }}">{{ $pCat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Bootstrap JS agar dropdown bisa berfungsi -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>