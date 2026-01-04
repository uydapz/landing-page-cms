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
                                    data-setbg="{{ asset('assets/img/subpage/default.jpeg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>VISI</h2>
                        </div>
                        <div class="about__text__desc">
                            <p style="font-weight: 500; font-size:20px;">Mewujudkan pesantren Al-Qur'an yang dapat
                                melahirkan ahlul Qur'an, Lafdzon, Ma'nan wa Amalan dalam bingkai rahmatan lil 'alamin.
                            </p>
                        </div>
                        <div class="section-title">
                            <h2>MISI</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>
                            <ul>
                                <li> Mewujudkan Lembaga Pendidikan Al-Qur'an dengan Metode Salaf yang Mandiri, Unggul,
                                    Kompetitif, Global dengan sistem Modern yang Kredibel.</li>
                                <li>Mencetak generasi Penghafal Al-Qur'an dengan bacaan yang benar dan penguasaan 10
                                    Ilmu Qiro'at Mutawattir serta mengamalkan dalam kehidupan </li>
                                <li>Mencetak Mufassir Al-Qur'an dengan pemahaman selaras dengan ajaran Ahlussunah Wal
                                    Jamaaah An Nahdliyah.</li>
                                <li>Mencetak generasi Qur'ani yang Mandiri, Berjiwa Pemimpin, Cerdas, Peka dan
                                    Berwawasan
                                    Luas yang bermanfaat untuk Ummat.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
