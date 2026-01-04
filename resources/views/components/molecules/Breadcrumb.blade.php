<!-- Breadcrumb Begin -->
<div class="breadcrumb-option spad">
    <img src="{{ asset('assets/img/breadcrumb.webp') }}" alt="Breadcrumb Background" class="breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>{{ $title  }}</h2>
                    <div class="breadcrumb__links">
                        <a href="/">Home</a>
                        <span>{{ $title }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- CSS -->
<style>
    .breadcrumb-option {
        position: relative;
        overflow: hidden; /* Membuat gambar tidak melebihi batas elemen */
    }

    .breadcrumb-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover; /* Mengisi elemen tanpa merubah rasio gambar */
        z-index: -1; /* Memastikan gambar berada di belakang konten lainnya */
    }

    .breadcrumb-option .container {
        position: relative;
    }
</style>
