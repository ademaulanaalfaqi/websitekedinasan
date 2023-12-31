<!-- Main Header-->
<header class="main-header header-style-one">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container clearfix">
            <!--Top Left-->
            <div class="top-left pull-left">
                <ul class="links-nav clearfix">
                    <li><span class="fa fa-bell-o"></span> Selamat datang di website {{$config['nama_website']}}</li>
                </ul>
            </div>

            <!--Top Right-->
            <div class="top-right pull-right">
                <ul class="links-nav clearfix">
                    <li><span class="fa fa-clock"></span> Senin - Jumat 08.00 - 16.00</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Header Top End -->

    <!--Header-Upper-->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="pull-left logo-outer">
                    <div class="logo" style="height: 90px">
                        <a href=""><img style="height: 100%" src="http://kantorkite.ketapangkab.go.id/public/{{ $config['logo'] }}" alt="{{$config['singkatan_website']}}"></a>
                    </div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-technology"></span></div>
                        <ul>
                            <li>Panggil Kami</li>
                            <li><strong>{{$config['phone']}}</strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box"><span class="flaticon-mail"></span></div>
                        <ul>
                            <li>Alamat Email</li>
                            <li><strong>asj@skjs</strong></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <!--<div class="link-btn">
                            <a href="#" class="theme-btn btn-style-one">get a quote</a>
                        </div>-->

                        <div class="icon-box"><span class="flaticon-location-pin"></span></div>
                        <ul>
                            <li>Alamat</li>
                            <li><strong>{{$config['alamat']}}</strong></li>
                        </ul>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!--Header-Lower-->
    <div class="header-lower">

        <div class="auto-container">
            {{-- <div class="nav-outer clearfix"> --}}
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li class="dropdown"><a href="#">Profil</a>
                                <ul>
                                    <li><a href="{{url('tentang')}}">Tentang</a></li>
                                    <li><a href="{{url('visi-misi')}}">Visi dan Misi</a></li>
                                    <li><a href="{{url('maklumat')}}">Maklumat</a></li>
                                    <li><a href="{{url('selayang-pandang')}}">Selayang Pandang</a></li>
                                    <li><a href="{{url('struktur-organisasi')}}">Struktur Organisasi</a></li>
                                    <li><a href="{{url('pegawai-opd')}}">Pegawai OPD</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Publikasi</a>
                                <ul>
                                    <li><a href="{{url('berita')}}">Berita</a></li>
                                    <li><a href="{{url('artikel')}}">Artikel</a></li>
                                    <li><a href="{{url('standar-pelayanan')}}">Standar Pelayanan</a></li>
                                    <li><a href="{{url('dokumen-publik')}}">Dokumen Publik</a></li>
                                    <li><a href="{{url('dokumen-kinerja')}}">Dokumen Kinerja</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Ruang Publik</a>
                                <ul>
                                    <li><a href="https://bit.ly/SKMKetapang" target="_blank">Kuisioner SKM</a></li>
                                    <li><a href="{{url('laporan-skm')}}">Laporan SKM</a></li>
                                    <li><a href="{{url('laporan-tindak-lanjut-skm')}}">Laporan Tindak Lanjut SKM</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('ppid')}}">PPID</a></li>
                            <li><a href="{{url('informasi')}}">Informasi</a></li>
                            <li class="dropdown"><a href="#">Galeri</a>
                                <ul>
                                    <li><a href="{{url('foto')}}">Galeri Foto</a></li>
                                    <li><a href="{{url('vidio')}}">Galeri Video</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('kontak')}}">Kontak</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li class="dropdown"><a href="#">Pengaduan</a>
                                <ul>
                                    <li><a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-ketapang">SP4N Laporan</a></li>
                                    <li><a href="{{url('informasi-pengaduan')}}">Informasi Pengaduan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            {{-- </div> --}}

        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="auto-container clearfix">

            <!--Right Col-->
            <div class="right-col">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation clearfix">
                            <li><a href="{{url('/')}}">Beranda</a></li>
                            <li class="dropdown"><a href="#">Profil</a>
                                <ul>
                                    <li><a href="{{url('tentang')}}">Tentang</a></li>
                                    <li><a href="{{url('visi-misi')}}">Visi dan Misi</a></li>
                                    <li><a href="{{url('maklumat')}}">Maklumat</a></li>
                                    <li><a href="{{url('selayang-pandang')}}">Selayang Pandang</a></li>
                                    <li><a href="{{url('struktur-organisasi')}}">Struktur Organisasi</a></li>
                                    <li><a href="{{url('pegawai-opd')}}">Pegawai OPD</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Publikasi</a>
                                <ul>
                                    <li><a href="{{url('berita')}}">Berita</a></li>
                                    <li><a href="{{url('artikel')}}">Artikel</a></li>
                                    <li><a href="{{url('standar-pelayanan')}}">Standar Pelayanan</a></li>
                                    <li><a href="{{url('dokumen-publik')}}">Dokumen Publik</a></li>
                                    <li><a href="{{url('dokumen-kinerja')}}">Dokumen Kinerja</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Ruang Publik</a>
                                <ul>
                                    <li><a href="https://bit.ly/SKMKetapang" target="_blank">Kuisioner SKM</a></li>
                                    <li><a href="{{url('laporan-skm')}}">Laporan SKM</a></li>
                                    <li><a href="{{url('laporan-skm')}}">Laporan Tindak Lanjut SKM</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('ppid')}}">PPID</a></li>
                            <li><a href="{{url('informasi')}}">Informasi</a></li>
                            <li class="dropdown"><a href="#">Galeri</a>
                                <ul>
                                    <li><a href="{{url('foto')}}">Galeri Foto</a></li>
                                    <li><a href="{{url('vidio')}}">Galeri Video</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('kontak')}}">Kontak</a></li>
                            <li><a href="{{url('faq')}}">FAQ</a></li>
                            <li class="dropdown"><a href="#">Pengaduan</a>
                                <ul>
                                    <li><a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-ketapang">SP4N Laporan</a></li>
                                    <li><a href="{{url('informasi-pengaduan')}}">Informasi Pengaduan</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>

        </div>
    </div><!--End Sticky Header-->

</header>
<!--End Main Header -->
