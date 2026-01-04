<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title"/>
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <h2>Denah Pesantren</h2>
                </div>
                <div class="col-lg-12">
                    <div class="about__pic">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="about__pic__item about__pic__item--large set-bg"
                                    data-setbg="{{ asset('assets/img/subpage/denah.webp') }}"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>