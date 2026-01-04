<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Santripasir.id merupakan website resmi milik PPSQ Asy-Syadzili 1, berisikan tentang informasi-informasi seputar PPSQ Asy-Syadzili 1 hingga artikel-artikel. Website ini dikelola oleh Santripasir Media Creative, sebuah organisasi yang bergerak dibidang multimedia dan jurnalistik dibawah naungan PPSQ Asy-Syadzili 1">
    <meta name="keywords" content="pondok salaf, pondok pesantren, pendidikan Islam, tahfidz Quran, santri, pendidikan agama, pesantren di Malang, Jawa Timur, pendaftaran pesantren, fasilitas pesantren, pendidikan salaf, pondok pesantren modern, sekolah Islam, ppsq, Asy-syadzili, asy syadzili, munim syadzili, santripasir, pesantren terbaik jawatimur, pesantren murah, pesantren boarding, pendidikan anak usia dini, kurikulum pesantren, komunitas santri, pesantren berbasis teknologi, bimbingan belajar pesantren, fasilitas olahraga pesantren">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('assets/img/icon.webp') }}" type="image/x-icon" />
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Santripasir.id - {{ $title }}">
    <meta property="og:description" content="Santripasir.id adalah website resmi milik PPSQ Asy-Syadzili 1 dengan informasi lengkap tentang pondok pesantren dan artikel terkait.">
    <meta property="og:image" content="{{ asset('assets/img/og-image.webp') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Alternate Language Tags -->
    <link rel="alternate" hreflang="id" href="{{ url('id') }}">
    <link rel="alternate" hreflang="en" href="{{ url('en') }}">
    
    <title>Santripasir | {{ $title }}</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css">
    <script src="https://kit.fontawesome.com/e7ffe2dae9.js" crossorigin="anonymous"></script>
    @stack('scripts')
</head>

<body>
    @if (Request::is('/'))
        <div id="preloder">
            <div class="loader">
                <img src="{{ asset('assets/img/icon.webp') }}" alt="Loading Image">
            </div>
        </div>
    @endif

    <!-- Header Section Begin -->
    <x-navbar :title="$title" />
    <!-- Header End -->

    {{ $slot }}

    <!-- Footer Section Begin -->
    <x-footer />
    <!-- Footer Section End -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const preloder = document.getElementById("preloder");
            const loadingImage = preloder.querySelector("img");

            window.addEventListener("load", function() {
                // Enlarge the image
                loadingImage.classList.add("enlarged");

                // Fade out after a delay
                setTimeout(() => {
                    preloder.classList.add("hidden");
                    setTimeout(() => {
                        preloder.style.display = "none";
                    }, 500); // Match this with the CSS transition time
                }, 1500); // Time to display the enlarged image before fading out
            });
        });
    </script>
    <!-- Js Plugins -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
