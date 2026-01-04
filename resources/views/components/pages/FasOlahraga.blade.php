<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="{{ asset('assets/img/subpage/fasorg.webp') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Fasilitas Olahraga</h2>
                        </div>
                        <div class="about__text__desc">
                            <p> <span style="font-weight: bolder;">Lapangan Futsal</span> : Lapangan ini berada di PPSQ Asy-Syadzili 1, tempat dimana para santri dapat bermain futsal disaat kegiatan ekstrakulikuler futsal.
                                <br>
                                <span style="font-weight: bolder;">Lapangan Voli</span> : Lapangan ini berada di PPSQ Asy-Syadzili 1, tempat dimana para santri dapat bermain Voli disaat kegiatan ekstrakulikuler Voli.
                                <br>
                                <span style="font-weight: bolder;">Lapangan Basket</span> : Lapangan ini berada di Yayasan Pendidikan dan Sosial Asy-Syadzili, tempat dimana para santri dapat bermain basket disaat kegiatan ekstrakulikuler basket.
                                <br>
                                <span style="font-weight: bolder;">Tempat Tenis Meja</span> : Sebuah tempat yang dilengkapi dengan meja untuk para santri bermain tenis meja disaat kegiatan ekstrakulikuler tenis meja.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
