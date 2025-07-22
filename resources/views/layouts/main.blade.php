<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'PT Kemas')</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home') }}">PT Kemas</a>
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
                        <a class="nav-link {{ request()->routeIs('team') ? 'active' : '' }}" href="{{ route('team') }}">Tim Kami</a>
                    </li>

                    {{-- GALERI --}}
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('galleries') ? 'active' : '' }}" href="{{ route('galleries') }}">Galeri</a>
                    </li>

                    {{-- BERITA (Dropdown) --}}
                    @php
                    $navCategories = \App\Models\Category::all();
                    @endphp
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('posts*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Berita
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="{{ route('posts.index') }}">Semua Berita</a></li>
                            @foreach($navCategories as $cat)
                            <li><a class="dropdown-item" href="{{ route('posts.byCategory', $cat->slug) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                    {{-- PRODUK (Dropdown) --}}
                    @php
                    $navProductCategories = \App\Models\ProductCategory::all();
                    @endphp
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('products*') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown">
                            Produk
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            @foreach($navProductCategories as $cat)
                            <li><a class="dropdown-item" href="{{ route('products.byCategory', $cat->slug) }}">{{ $cat->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>