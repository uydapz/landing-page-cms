<x-HomeLayout :title="$title ?? ''">
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            @foreach ($spanduk as $s)
                <div class="hero__item set-bg" data-setbg="{{ asset('assets/img/bg-1.webp') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="hero__text">
                                    <span>{{ $s->description }}</span>
                                    <h2 style="font-size: 40px;">{{ $s->title }}</h2>
                                    @if ($s->link)
                                        <a href="{{ $s->link }}" class="primary-btn">Kunjungi</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </section>
    <!-- Hero Section End -->
    <div class="modal fade" id="dawuhBuya" tabindex="-1" role="dialog" aria-labelledby="dawuhBuyaLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-fade" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dawuhBuyaLabel">Dawuh Buya</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <audio controls>
                                <source src="{{ asset('assets/mp3/dawuh.mp3') }}" type="audio/mpeg">
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dawuhBuya"
                            style="background-color: #1A4D2E; color:#F5EFE6; border:none;"><i
                                class="fa fa-microphone-lines"></i></button>
                        </button>
                        <div class="section-title">
                            <img src="{{ asset('assets/img/abuya.webp') }}" class="img-fluid" alt="">
                            <h2 style="font-size:25px; text-transform:capitalize; padding:8px;">Abuya <br> KH. abdul
                                mun'im syadzili</h2>
                            <p>Pengasuh PPSQ Asy-Syadzili 1</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h2>Program Unggulan</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i style="font-size: 28px; color:#1A4D2E;" class="fa fa-chalkboard-user"></i>
                                </div>
                                <h4>Madrasah Diniyah</h4>
                                <p>Program pembelajaran kitab-kitab salaf seperti Nahwu, Shorof, Fiqih ,Tafsir Dan
                                    Tauhid.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i style="font-size: 28px; color:#1A4D2E;" class="fa fa-book-quran"></i>
                                </div>
                                <h4>Tahfidz 30 Juz</h4>
                                <p>Program Tahfidz dengan metode dan kurikulum pengajaran yang intens.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i style="font-size: 28px; color:#1A4D2E;" class="fa fa-book-open-reader"></i>
                                </div>
                                <h4>Qiro'atul Sab'ah dan 'Asyr</h4>
                                <p>Pembelajaran beragam bacaan Al-Quran dari Imam yang tersambung kepada Rasulullah SAW,
                                    lebih dikenal dengan Qira'at Sab'ah dan Qira'at 'Asyr.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="services__item">
                                <div class="services__item__icon">
                                    <i style="font-size: 28px; color:#1A4D2E;" class="fa fa-volleyball"></i>
                                </div>
                                <h4>Ekstrakurikuler</h4>
                                <p>Mewadahi bakat dan minat santri dibidang olahraga dan seni, seperti nasyid,
                                    albanjari, futsal, sepakbola, voli, basket, bulutangkis, dan tenis meja.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->
    <ul>
    </ul>

    <section class="work">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Seputar</span>
                        <h2>Galeri Santripasir</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    @foreach ($gallery as $g)
                        <div class="col-lg-4 col-md-6 col-sm-6 p-0">
                            <div class="team__item p-2">
                                <img src="{{ asset('storage/gallery/' . $g->image) }}" alt="Team Member">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
    </section>


    <section class="work">
        <div class="container">
            <div class="row justify-content-center mt-5 mb-5 pb-2 d-flex">
                <div class="col-md-6 d-flex">
                    <iframe width="100%" height="380"
                        src="https://www.youtube.com/embed/0HXTkQgQq5A?si=l4HjUrzDar61lq39" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div class="col-md-6 heading-section heading-section-white pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4" style="color: #1A4D2E;">Tentang PPSQ Asy-Syadzili 1</h2>
                    <p style="color:#1A4D2E;">Pondok Pesantren Salaf Qur'an (PPSQ) Asy-Syadzili 1 merupakan lembaga
                        pendidikan berbasis pondok
                        pesantren tahfidz Qur'an yang berlandaskan ahlussunnah wal jama'ah an Nahdliyyah, memiliki
                        program unggulan yakni : madrasah diniyah, tahfidz Qur'an 30 juz, qiro'at sab'ah dan 'asyrah
                        serta kegiatan ekstrakulikuler untuk mengembangkan minat dan bakat santri. PPSQ Asy-Syadzili 1
                        didirikan oleh KH. Ahmad Syadzili Muhdlor dan kini diasuh oleh Abuya KH. Abdul Mun'im Syadzili
                        dengan visi membumikan Al-Qur'an, melangitkan manusia. Hingga kini PPSQ Asy-Syadzili 1 telah
                        mencetak ribuan santri yang hafal Al-Qur'an tentunya dengan sanad yang bersambung hingga kepada
                        Rasulullah SAW.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <i style="font-size: 58px; color:#E8DFCA;" class="fa fa-people-group"></i>
                                <h2 style="color: #F5EFE6;" class="counter_num">1315</h2>
                                <p style="color:#F5EFE6;">Santri Putra</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <i style="font-size: 58px; color:#E8DFCA;" class="fa fa-users-gear"></i>
                                <h2 style="color: #F5EFE6;" class="counter_num">156</h2>
                                <p style="color:#F5EFE6;">Pengurus</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <i style="font-size: 58px; color:#E8DFCA;" class="fa fa-person-chalkboard"></i>
                                <h2 style="color: #F5EFE6;" class="counter_num">98</h2>
                                <p style="color:#F5EFE6;">Tenaga pengajar</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <i style="font-size: 58px; color:#E8DFCA;" class="fa fa-clipboard-list"></i>
                                <h2 style="color: #F5EFE6;" class="counter_num">12</h2>
                                <p style="color:#F5EFE6;">Unit</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Blog Kami</span>
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel">
                    @foreach ($blog as $b)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            @include('components.atoms.ArticleCard')
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{ asset('assets/img/footer.webp') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Bergabung Sekarang, dan jadilah bagian dari kami</h2>
                        <p>Keluarga Besar PPSQ Asy-Syadzili 1</p>
                        <a href="https://s.id/psb_ppsq_asy-syadzili-1-tahun_24-25" class="primary-btn">Klik untuk
                            daftar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
</x-HomeLayout>
