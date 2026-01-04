<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title"/>
    <section class="about spad">
        <div class="container">
            <div class="section-title">
                <span>Informasi</span>
                <h2>Brosur santri baru</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <img src="{{ asset('assets/img/subpage/belakang.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__pic">
                        <div class="row">
                            <img src="{{ asset('assets/img/subpage/belakang.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>