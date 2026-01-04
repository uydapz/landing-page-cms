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
                        <h2>Fasilitas Keamanan</h2>
                        </div>
                        <div class="about__text__desc">
                            <p>Di PPSQ Asy-Syadzili terdapat 2 pos, yakni pos keamanan dan pos penitipan barang. Pada
                                pos kemanan, terdapat satpam berjaga di gerbang dengan sistem shift untuk memastikan
                                keamanan pesantren terjaga. Sedangkan pos penitipan barang merupakan tempat dimana para
                                wali santri dapat menitipkan barang kepada santri dan nantinya pihak pos akan
                                menyampaikan barang titipan tersebut kepada pihak asrama untuk diberikan kepada putranya
                                terkait.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
