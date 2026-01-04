<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title"/>
    <section class="about spad">
        <div class="container">
            <div class="section-title">
                <h2>Rutinitas Santri</h2>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="about__pic">
                        <div class="row">
                            <img src="{{ asset('assets/img/subpage/santri.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>