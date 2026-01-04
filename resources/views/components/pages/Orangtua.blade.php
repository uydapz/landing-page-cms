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
                            <p> <b>Sambangan santri</b><br>
                                Sambangan santri rutin dilakukan satu bulan sekali lebih tepatnya pada ahad pon dalam tanggalan jawa, dalam kegiatan sambangan sendiri para walisantri juga wajib mengikuti prosedur yang telah ditentukan oleh pesantren seperti berikut :
                                Walisantri tidak diperkenankan menyambang selain hari yang sudah ditentukan 
                                Walisantri wajib memakai pakaian yang sopan & syar’i saat masuk kedalam pesantren
                                Walisantri wajib mengikuti seluruh rangkaian acara kegiatan sambangan 
                                Walisantri tidak diperkenankan merokok didalam pesantren 
                                Durasi sambangan maksimal jam 14.30
                                Walisantri diharapkan tidak meninggalkan sampah setelah sambangan santri
                                
                                Rangkaian acara kegiatan sambangan :
                                <ul>
                                    <li>08.45 - 09.00 : walisantri masuk pesantren dan menuju pelataran masjid</li>
                                    <li>09.00 - 10.00 : pengaosan kitab tibyan bersama pengasuh, abuya KH. Abdul mun’im syadzili</li>
                                    <li>10.00 - 10.30 : sosialisasi oleh kepala dan waka PPSQ Asy-Syadzili 1</li>
                                    <li>10.30 - 14.30 : sambangan santri</li>
                                </ul>
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-HomeLayout>