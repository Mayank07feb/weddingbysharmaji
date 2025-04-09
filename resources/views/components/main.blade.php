<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sharmaji Photoshoot')</title>
    @vite(['resources/css/app.css']) {{-- Tailwind CSS via Vite --}}

    <!-- AOS Animation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />

    <!-- Google Material Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


    <style>
        body {
            font-family: 'Josefin Sans', sans-serif;
        }
    </style>
</head>

<body class="bg-white relative" data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">

    {{-- Header --}}
    @include('components.header')

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('components.footer')

    <!-- Go to Top Button -->
    <button id="goToTop"
        class="fixed bottom-6 right-6 z-50 w-12 h-12 bg-orange-500 text-white rounded-full flex items-center justify-center shadow-xl hover:bg-orange-700 transition-all duration-300 opacity-0 pointer-events-none group">
        <span class="material-icons text-3xl transition-transform duration-300 group-hover:-translate-y-1">
            expand_less
        </span>
    </button>

    <!-- AOS Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Go to Top Script -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const goToTopBtn = document.getElementById("goToTop");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 300) {
                    goToTopBtn.classList.remove("opacity-0", "pointer-events-none");
                } else {
                    goToTopBtn.classList.add("opacity-0", "pointer-events-none");
                }
            });

            goToTopBtn.addEventListener("click", () => {
                window.scrollTo({
                    top: 0,
                    behavior: "smooth"
                });
            });
        });
    </script>

</body>

</html>
