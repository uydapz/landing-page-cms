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
                                    data-setbg="{{ asset('assets/img/subpage/act1.webp') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Unit Aktivitas Santri</h2>
                        </div>
                        <div class="about__text__desc">
                            <p> <span style="font-weight: bolder;">- Masjid</span> <br> Sebagai sarana untuk paea santri melakukan kegiatan sholat berjamaah dan pembacaan wirid.
                                <br>
                                <span style="font-weight: bolder;">- Aula</span> <br> Tempat diadakannya acara-acara kreatif untuk santri dan aula juga difungsikan sebagai tempat belajar dan mengajar santri dengan sistem halaqoh.
                                <br>
                                <span style="font-weight: bolder;">- Asrama</span> <br> Terdapat beberapa kamar sebagai tempat para santri beristirahat.
                                <br>
                                <span style="font-weight: bolder;">- Koperasi</span> <br> Tempat para sabtri dapat menitipkan uangnya untuk ditabung atau diambil secara berkala, pada koperasi juga walisantri dapat menitipkan uang via transfer untuk diberikan kepada putranya.
                                <br>
                                <span style="font-weight: bolder;">- Taman</span> <br> Di taman, para santri dapat mengisi wakti senggangnya bersama temannya yang lain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
