<x-HomeLayout :title="$title">
    <x-Breadcrumb :title="$title" />
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
                            <p><b>ISMA (Ikatan Santri Mutakhorijin Asy-Syadzili)</b>
                                <br>
                                ISMA merupakan Ikatan para Alumni santri Asy-Syadzili yang siap menjadi garda terdepan
                                dalam membantu dan berkhidmah pada Abuya Mun’im serta Pondok Pesantren Asy-Syadzili,
                                selain itu, abuya selalu memperhatikan kualitas lulusan Pondok Pesantren Asy-Syadzili
                                yang memiliki daya saing dan keahlian agar mampu terjun dalam masyarakat serta menjadi
                                (Hafidzul Qur’an, lafdzon, ma’nan, wa amalan) sebenar-benarnya penghafal Quran yang
                                mampu mengamalkan isinya, serta berdakwah melalui hal apapun yang menjadi potensi para
                                santri.
                                <br>
                                <br>
                                ISMA juga memiliki kegiatan rutinan bersama Abuya Kh. Abdul Mun’im Syadzili yang dimana
                                para alumni diberi penguatan, motivasi, dan pengarahan dalam setiap pertemuannya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>
