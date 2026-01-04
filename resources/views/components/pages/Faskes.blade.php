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
                                    data-setbg="{{ asset('assets/img/subpage/faskes.webp') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Fasilitas Kesehatan</h2>
                        </div>
                        <div class="about__text__desc">
                            <p> Di PPSQ Asy-Syadzili memiliki unit untuk kesehatan para santri unit tersebut bernama
                                POSKESTREN (pos kesehatan pesantren), dimana para santri dapar berobat secara gratis
                                dengan berbagai tingkat penanganan yang berbeda tergantung dari seberapa parah kondisi
                                santri, santri yang sesang sakit akan mendapatkan penanganan khusus dari pihak
                                POSKESTREN mulai dari makanan, hingga ruangan tersendiri untuk tempat istirahat santri
                                yang sedang sakit.
                                <br>
                                <br>
                                Unit POSKESTREN ini diawasi dan dipantau langsung oleh salah satu keluarga ndalem yakni
                                dr. Muhammad Mufid Syadzili. Selain itu POSKESTREN seringkali memberikan penyuluhan
                                kesehatan kepada para santri dengan mendatangkan para ahli, hal ini bertujuan agar para
                                santri dapat senantiasa hidup sehat dan menjaga kebersihan serta mengetahui apa yang
                                seharusnya dilakukan ketika terpapar penyakit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
