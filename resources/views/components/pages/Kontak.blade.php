<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>

    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Informasi {{ $title ?? '' }}</span>
                            <h2>Informasi Kami</h2>
                        </div>
                        <div id="map" style="height: 400px;"></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <section class="social-media-cards">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card social-card">
                                        <i class="fa fa-facebook social-icon"></i>
                                        <h5 class="social-title">@PPSQ Asy Syadzili 1</h5>
                                        {{-- <p class="social-description">Stay connected with friends and the world around
                                            you on Facebook.</p> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card social-card">
                                        <i class="fa fa-instagram social-icon"></i>
                                        <h5 class="social-title">@santripasir</h5>
                                        {{-- <p class="social-description">Share your moments and explore photos from around
                                            the world on Instagram.</p> --}}
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card social-card">
                                        <i class="fa fa-youtube social-icon"></i>
                                        <h5 class="social-title">@PPSQ Asy-Syadzili 1</h5>
                                        {{-- <p class="social-description">Watch, like, and share videos on YouTube.</p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
    <style>
        .social-media-cards {
            padding: 20px 0;
        }

        .social-card {
            text-align: center;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .social-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .social-icon {
            font-size: 40px;
            color: #333;
            margin-bottom: 10px;
        }

        .social-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .social-description {
            font-size: 14px;
            color: #666;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Inisialisasi peta
            var map = L.map('map').setView([-7.9718376, 112.7392849], 10);

            // Tambahkan layer peta (OpenStreetMap)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Tambahkan marker (opsional)
            L.marker([-7.9718376, 112.7392849]).addTo(map)
                .bindPopup('PPSQ Asy-Syadzili')
                .openPopup();
        });
    </script>
</x-HomeLayout>
