<style>
    a:hover {
        text-decoration: none;
    }
</style>
<header class="header" style="{{ $title != 'Kontak' ? 'position: fixed;' : '' }} background:rgb(245, 239, 230); ">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <a href="/"><img class="img-navbar" src="{{ asset('assets/img/navbar.webp') }}"
                            alt=""></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="header__nav__option">
                    <nav class="header__nav__menu mobile-menu">
                        <ul>
                            <li class="{{ $title == 'Beranda' ? 'active' : '' }}"><a href="/">Beranda</a></li>
                            <li class="{{ $title == 'Blogspot' || $title == 'Galeri' || request()->is('blog/*') || request()->is('usepage/*') || request()->is('gallery/*') ? 'active' : '' }}">
                                <a role="button" style="color: #1A4D2E;">Konten</a>
                                <ul class="dropdown">
                                    <li><a href="/blog">Artikel</a></li>
                                    <li><a href="/gallery">Galeri</a></li>
                                </ul>
                            </li>
                            <li
                                class="{{ $title == 'Santri Baru' || $title == 'Santri' || $title == 'Alumni' || $title == 'Staff & Pengajar' || $title == 'Orangtua' ? 'active' : '' }}">
                                <a role="button" style="color: #1A4D2E;">Informasi</a>
                                <ul class="dropdown">
                                    <li><a href="/santri-baru">Santri Baru</a></li>
                                    <li><a href="/santri">Santri</a></li>
                                    <li><a href="/alumni">Alumni</a></li>
                                    <li><a href="/staff-pengajar">Staff & Pengajar</a></li>
                                    <li><a href="/orangtua">Orangtua</a></li>
                                </ul>
                            </li>
                            <li
                                class="{{ $title == 'Profil Singkat' || $title == 'Pendiri' || $title == 'Pengasuh' || $title == 'Sejarah Singkat' || $title == 'Logo & Motto' || $title == 'Visi & Misi' || $title == 'Prestasi' ? 'active' : '' }}">
                                <a role="button" style="color: #1A4D2E;">Tentang Kami</a>
                                <ul class="dropdown">
                                    <li><a href="/profil">Profil Singkat</a></li>
                                    <li><a href="/pendiri">Pendiri</a></li>
                                    <li><a href="/pengasuh">Pengasuh</a></li>
                                    <li><a href="/sejarah">Sejarah Singkat</a></li>
                                    <li><a href="/logo-motto">Logo & Motto</a></li>
                                    <li><a href="/visi-misi">Visi & Misi</a></li>
                                    <li><a href="/prestasi">Prestasi</a></li>
                                </ul>
                            </li>
                            <li
                                class="{{ $title == 'Fasilitas kesehatan' || $title == 'Unit aktivitas santri' || $title == 'Fasilitas Olahraga' || $title == 'Kantin & Pujasera' || $title == 'Keamanan' || $title == 'Peta pesantren' ? 'active' : '' }}">
                                <a role="button" style="color: #1A4D2E;">Kehidupan Pesantren</a>
                                <ul class="dropdown">
                                    <li><a href="/faskes">Fasilitas Kesehatan</a></li>
                                    <li><a href="/unit-aktivitas">Unit Aktivitas Santri</a></li>
                                    <li><a href="/fasorg">Fasilitas Olahraga</a></li>
                                    <li><a href="/kantin-pujas">Kantin & Pujasera</a></li>
                                    <li><a href="/keamanan">Keamanan</a></li>
                                    <li><a href="/peta">Peta Pesantren</a></li>
                                </ul>
                            </li>
                            <li
                                class="{{ $title == 'PSB' || $title == 'Kontak' || $title == 'Saran' || $title == 'Lainnya' ? 'active' : '' }}">
                                <a role="button" style="color: #1A4D2E;">Layanan</a>
                                <ul class="dropdown">
                                    <li><a href="/psb">PSB</a></li>
                                    <li><a href="/kontak">Kontak Personal</a></li>
                                    {{-- <li><a href="/saran">Saran</a></li> --}}
                                    {{-- <li><a href="/lainnya">Lainnya</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <div class="header__nav__social">
                        <div class="row">
                            @guest
                                <a href="/login"><i class="fa fa-right-to-bracket"></i></a>
                                @endguest
                                @auth
                                <a href="/dashboard/home">Here, {{ Auth::user()->username }} <i class="fa fa-screwdriver-wrench"></i></a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
</header>
