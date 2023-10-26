@extends('components.base.base')
@section('content')
    <!--Main Slider-->
    <section class="main-slider">

        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>

                    @foreach ($list_slider as $item)
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000"
                            data-thumb="assets/images/main-slider/1.jpg" data-saveperformance="off"
                            data-title="Awesome Title Here">
                            <img src="http://kantorkite.ketapangkab.go.id/public/{{ $item['foto'] }}" alt=""
                                data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat">

                            <!--Overlay-->
                            <div class="overlay-style-one"></div>

                            <div class="tp-caption sfl sfb tp-resizeme" data-x="center" data-hoffset="0" data-y="center"
                                data-voffset="-100" data-speed="1500" data-start="0" data-easing="easeOutExpo"
                                data-splitin="none" data-splitout="none" data-elementdelay="0.01" data-endelementdelay="0.3"
                                data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <div style="font-size: 36px" class="subtitle-text">{{ $item['judul'] }}</div>
                            </div>

                            <div class="tp-caption text-center sft sfb tp-resizeme" data-x="center" data-hoffset="0"
                                data-y="center" data-voffset="-20" data-speed="1500" data-start="0"
                                data-easing="easeOutExpo" data-splitin="none" data-splitout="none" data-elementdelay="0.01"
                                data-endelementdelay="0.3" data-endspeed="1200" data-endeasing="Power4.easeIn">
                                <h2 style="font-size: 20px">{{ $item['deskripsi'] }}</h2>
                            </div>

                        </li>
                    @endforeach


                </ul>

                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>

    <!--tentang kami-->
    <section class="default-section">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Text Column-->
                <div class="column text-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">

                        <!--featured-gallery-->
                        <div class="featured-gallery">
                            <div class="row clearfix">

                                <!--featured-image-box-->
                                <div class="featured-image-box col-md-12 col-sm-12 col-xs-12">
                                    <figure class="image">
                                        <img src="http://kantorkite.ketapangkab.go.id/public/{{ $profil['foto_tentang'] }}"
                                            alt="" />
                                    </figure>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

                <!--Accordions Column-->
                <div class="column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-box">

                        <div class="sec-title-one">
                            <h2 style="font-size: 30px">Tentang Kami</h2>
                            <div class="text">{!! $profil['tentang'] !!}</div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--tentang layanan-->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="row clearfix">
                <!--testimonial-column-->
                <div class="testimonial-column col-md-12 col-sm-12 col-xs-12">
                    <div class="sec-title-two text-center">
                        <h2>Tentang Layanan</h2>
                        <div class="text"><strong>Layanan DSP3AKB KABUPATEN KETAPANG</strong></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--visi misi-->
    <section class="service-style-one">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-md-12 col-sm-12">

                    <div class="text"><strong>DSP3AKB KABUPATEN KETAPANG</strong></div>
                    <h2 style="color: #222; font-size: 36px">Visi Misi</h2>

                    <div class="row clearfix">
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h3>Visi</h3>
                                <div class="text">{!! $profil['visi'] !!}</div>

                            </div>
                        </div>
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h3>Misi</h3>
                                <div class="text">{!! $profil['misi'] !!}</div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--pegawai-->
    <section class="professionals">
        <div class="auto-container">

            <div class="sec-title-four">
                <h2>Pegawai {{ $config['singkatan_website'] }}</h2>
            </div>

            <div class="row clearfix">

                @foreach ($list_pegawai as $item)
                    <div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                        <!--inner-box-->
                        <div class="inner-box">
                            <figure class="image">
                                <img src="{{ url('public') }}/assets/images/resource/team-image-1.jpg" alt="" />
                            </figure>

                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3>MIKE DUDLEY</h3>
                                    <div class="designation">- Chief Engineer -</div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--lokasi-->
    <div class="newsletter-style-one" style="background-image:url(images/background/newsletter-bg.png);">
        <div class="auto-container">
            <div class="sec-title-two">
                <h2>Lokasi {{ $config['singkatan_website'] }}</h2>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="framee">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.8777554955929!2d109.97743307054328!3d-1.8327716084759398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05185f1b8755ef%3A0xca2a323d56b50425!2sDinas%20Sosial%2C%20Pemberdayaan%20Perempuan%2C%20Perlindungan%20Anak%20Dan%20Keluarga%20Berencana!5e0!3m2!1sen!2sus!4v1697615081621!5m2!1sen!2sus"
                            width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--berita terbaru-->
    <section class="services-column-two">
        <div class="auto-container">

            <!--Section Title-->
            <div class="sec-title-one">
                <h2>Berita Terbaru {{ $config['singkatan_website'] }}</h2>
            </div>
            <div class="row clearfix border-1">
                @foreach ($list_berita as $item)
                    <!--Service block two-->
                    <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <figure class="image"><a href="{{ url('detail-berita', $item['slug']) }}"><img
                                            src="http://kantorkite.ketapangkab.go.id/public/{{ $item['foto'] }}"
                                            alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="outer-link">
                                    <a href="{{ url('detail-berita', $item['slug']) }}"
                                        class="theme-btn service-title"><span class="flaticon-clock"></span>
                                        {{ $item['created_at'] }}</a>
                                </div>
                                <div class="text">{{ $item['judul'] }}</div>
                                <div class="link-box"><a href="{{ url('detail-berita', $item['slug']) }}"
                                        class="theme-btn normal-link">VIEW MORE <span
                                            class="fa fa-long-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>
@endsection
