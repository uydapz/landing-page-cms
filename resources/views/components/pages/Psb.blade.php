<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title"/>
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__text">
                        <div class="section-title">
                            <span>Informasi {{ $title ?? '' }}</span>
                            <h2>Sekilas Info</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>Untuk lanjutnya pergi ke halaman <a href="https://tally.so/r/npOd1E">Berikut</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>