<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
    <section class="about spad">
        <div class="container">
            <div class="section-title">
                <span>Informasi {{ $title ?? '' }}</span>
                <h2>Sekilas Info</h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ asset('assets/img/subpage/sanad.webp') }}" class="mb-2" alt="">
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                      
                        <div class="about__text__desc">
                            <p>Sebagai penunjang pembelajaran santri dibutuhkan juga kualitas pengajar yang memadai. Di
                                Asy-Syadzili sendiri seluruh jajaran staff & pengajar lebih familiar disebut kafil &
                                asatidz, kafil sebagai penunjang hafalan santri sedangkan asatidz lebih berfokus pada
                                madrasah diniyah. Mengenai kualitas dalam pengajaran sendiri, Seluruh kafil & asatidz di
                                PPSQ Asy-Syadzili 1 memiliki legalitas langsung oleh pengasuh berupa sertiifikasi sanad
                                keilmuan yang merujuk langsung hingga ke rasulullah SAW, dan juga sebagai bukti bahwa
                                PPSQ Asy-Syadzili 1 memiliki sanad keilmuan yang jelas hingga ke rasulullah SAW yang
                                juga merupakan anjuran beliau dalam syarat tholabul ilmi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
