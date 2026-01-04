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
                            <span>{{ $title ?? '' }}</span>
                            <h2>PPSQ Asy-Syadzili</h2>
                        </div>
                        <div class="about__text__desc">
                            <p> Pondok Pesantren Asy-Syadzili didirikan oleh KH. Ahmad Syadzili Muhdlor pada tahun 1975
                                yang dulunya Pondok pesantren ini bernama Pondok Pesantren Tarbiyah Tahtidzil Qur'an
                                (PPTTQ),
                                pada awalnya Kyai Syadzili tidak berniat untuk mendirikan pondok pesantren dan hanya
                                memiliki beberapa santri, di usia senjanya, barulah beliau kerso (mau) untuk mendirikan
                                pesantren, tak lama setelah itu, beliau wafat, pembangunan pondok pesantren tetap
                                dilanjutkan oleh istri Beliau yaitu Bu Nyai Hj. Rohmah Marzuki, meskipun pondok
                                pesantren tetap dibangun tanpa pengasuh, dikala itu tuntutan jatuh pada putra ke 6
                                beliau Abuya KH. Abdul Mun'im Syadzili dari istri Bu Nyai Hj. Rohmah Marzuki, karena
                                saat itu putra kyai Syadzili yang hafal Al-Quran hanya beliau, disaat tuntutan itu jatuh
                                beliau masih menempuh proses belajar di Pondok Pesantren Al-falah Ploso, Mojo,Kediri,
                                tetapi beliau tidak diperbolehkan boyong oleh Pengasuh, yang akhirnya beliau memutuskan
                                untuk pulang pergi Kediri-Malang untuk tetap belajar dan mengemban amanah sebagai
                                pengasuh, hingga saat ini tongkat kemimpinan masih dipegang Abuya KH. Abdul Mun'im
                                Syadzili dan pondok pesantren Asy-Syadzili memiliki 6 cabang yang Masing-masing
                                pesantren dipegang oleh putra dan putri Kyai Syadzili, diantaranya yakni :
                                <ul style="color: #232b2b; padding:12px;">
                                    <li>PPSQ Asy-Syadzili 1 (Sumberpasir, Pakis, Malang)</li>
                                    <li>PPSQ Asy-Syadzili 2 (Sumberpasir, Pakis, Malang) </li>
                                    <li>PPTQ Asy-Syadzili 3 (Tumpang, Malang) </li>
                                    <li>PPTQ Asy-Syadzili 4 (Putukrejo, Gondanglegi, Malang) </li>
                                    <li>PPSQ Asy-Syadzili 5 (Sumberpasir, Pakis, Malang)</li>
                                    <li>PPTQ Asy-Syadzili 6 (Wrati, Kejayan, Pasuruan)</li>
                                </ul>
                            </p>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
