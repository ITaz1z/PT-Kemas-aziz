<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PT Kemas</title>

    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    {{-- Font Awesome untuk icons --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    {{-- Additional CSS untuk halaman tertentu --}}
    @stack('styles')
</head>

<body>
    @include('partials.navbar')

    <main class="py-3" style="margin-top: 55px;">
        @yield('content')
    </main>

    <footer class="text-center py-3 bg-dark text-white mt-5">
        &copy; {{ date('Y') }} PT Kemas. All rights reserved.
    </footer>

    {{-- JS Core --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    {{-- Main JavaScript --}}
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNavbar');
            if (navbar && window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else if (navbar) {
                navbar.classList.remove('scrolled');
            }
        });

        // Desktop: Dropdown hover (tanpa klik)
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.navbar-nav .dropdown').forEach(dropdown => {
                const dropdownToggle = dropdown.querySelector('.dropdown-toggle');
                const dropdownMenu = dropdown.querySelector('.dropdown-menu');

                // Only for desktop
                if (window.innerWidth > 991) {
                    // Show on hover
                    dropdown.addEventListener('mouseenter', function() {
                        dropdownMenu.classList.add('show');
                    });

                    // Hide on leave
                    dropdown.addEventListener('mouseleave', function() {
                        dropdownMenu.classList.remove('show');
                    });

                    // Prevent click behavior on desktop
                    dropdownToggle.addEventListener('click', function(e) {
                        e.preventDefault();
                    });
                }
            });

            // Close mobile menu after click
            document.querySelectorAll('.navbar-nav .nav-link:not(.dropdown-toggle)').forEach(link => {
                link.addEventListener('click', () => {
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse && navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                    }
                });
            });
        });
    </script>

    {{-- Additional JavaScript untuk halaman tertentu --}}
    @stack('scripts')
</body>

</html>