<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about__pic">
                        <div class="row">
                            <img src="{{ asset('assets/img/subpage/logo.webp') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="about__text">
                        <div class="section-title">
                            <h2>MOTTO</h2>
                        </div>
                        <div class="about__text__desc">
                            <p style="font-weight: 500; font-size:20px;">Membumikan Al-Qur'an Melangitkan Manusia.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-HomeLayout>
