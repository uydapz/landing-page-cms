<x-HomeLayout :title="$title">
    <style>
        .team__item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            width: 100%;
            height: auto;
            /* Sesuaikan tinggi gambar secara otomatis */
            transition: transform 0.5s ease;
        }

        .team__item img {
            width: 100%;
            height: auto;
            transition: transform 0.5s ease;
        }

        .team__item__text {
            position: absolute;
            bottom: 0;
            /* Posisi di bagian bawah gambar */
            left: 0;
            right: 0;
            background: rgba(0, 0, 0, 0.7);
            color: #fff;
            text-align: center;
            opacity: 0;
            padding: 10px;
            transition: opacity 0.5s ease, transform 0.5s ease;
            border-radius: 10px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.5);
        }

        .team__item:hover {
            transform: translateY(-5px) scale(1.02);
        }

        .team__item:hover img {
            transform: scale(1.05);
        }

        .team__item:hover .team__item__text {
            opacity: 1;
            transform: translateY(-10px);
            /* Sedikit menggeser teks ke atas */
        }

        .pagination-container {
            display: flex;
            justify-content: center;
            /* Memusatkan pagination secara horizontal */
            margin-top: 20px;
            /* Jarak atas untuk memberikan spasi */
        }
    </style>

    <x-Breadcrumb :title="$title" />
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                @foreach ($gallery as $gal)
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="team__item p-2">
                            <img src="{{ asset('storage/gallery/' . $gal->image) }}" alt="{{ $gal->caption }}">
                            <div class="team__item__text">
                                <h4 style="color:#F5EFE6;">{{ $gal->caption }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="pagination-container">
                {{ $gallery->links() }}
            </div>
        </div>
    </section>
</x-HomeLayout>
