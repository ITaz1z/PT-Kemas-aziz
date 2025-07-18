<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Kemas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    @include('partials.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-white mt-5">
        &copy; {{ date('Y') }} PT Kemas. All rights reserved.
    </footer>

</body>

</html>