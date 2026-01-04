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
                                    data-setbg="{{ asset('assets/img/subpage/default.jpeg') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Kantin</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>Tempat para santri membeli snack untuk camilan dan kebutuhan pribadi para santri untuk
                                kegiatan sehari-hari.</p>
                        </div>
                    </div>
                    <div class="about__text">
                        <div class="section-title">
                            <h2>Pujasera</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>Tempat para santri membeli makanan berat seperti nasi dengan lauk yang beraneka ragam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
