<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
    <section class="about spad">
        <div class="container">
            <div class="row">
                {{-- <div class="col-lg-4">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="{{ asset('assets/img/about/about-1.jpg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Informasi {{ $title ?? '' }}</span>
                            <h2>Sekilas Info</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>PPSQ Asy-Syadzili 1 (putra) merupakan Pondok Pesantren Tahfidzul Quran yang berladaskan
                                Ahlussunnah wal jamaah berbasis Pendidikan salaf dengan pembelajaran unggulan yaitu
                                Qiraat 10 (Qiraat asyr) yang merupakan ilu penyempurna bagi seorang perhafal Qur’an yang
                                jarang sekali di ajarkan pada Pondok pesatren Tahfidzul Qur’an lainnya.
                                <br><br>
                                Selain itu Pondok Pesantren Asy-Syadzili 1 juga memiliki bidang olahraga dan kesenian
                                yang menampung dan mengasah bakat para santri untuk dapat mengembangkan potensi yang
                                dimiliki setiap masing-masing santri, dengan harapan para santri tidak hanya mampu
                                berkembang dalam keilmuan agamanya tetapi juga bakat yang berguna dalam kehidupan
                                masyarakat nantinya.
                                <br><br>
                                Ditambah fasilitas PPSQ Asy-Syadzili 1 yang tekah memadai dalam menunjang aktivitas
                                santri setiap harinya, mulai dari Fasilitas Kesehatan, Fasilitas pendidikan, Lapangan,
                                laundry gratis, kantin, pujasera, dan lain-lain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
