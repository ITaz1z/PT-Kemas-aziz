<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Kemas</title>

    <!-- GUNAKAN CSS BIASA -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">


    <!-- Bootstrap & AOS dari CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-white mt-5">
        &copy; {{ date('Y') }} PT Kemas. All rights reserved.
    </footer>

    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>

</body>

</html>