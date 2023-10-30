@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{ url('public') }}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Kontak</h1>
        </div>

        <!--page-info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Kontak</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <!--Sidebar blog Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    <div class="sec-title-one">
                        <h2 style="font-size: 30px">Kontak</h2> <br>

                        <section class="contact-info-section">
                            <div class="auto-container">
                                <div class="row clearfix">

                                    <div class="column col-md-4 col-sm-6 col-xs-12">
                                        <div class="info-box wow " data-wow-delay="0ms"
                                            data-wow-duration="1500ms">
                                            <!--icon-box-->
                                            <div class="icon-box">
                                                <span class="flaticon-placeholder-1"></span>
                                            </div>

                                            <h3>Address:</h3>
                                            <div class="text">Jl. HOS Cokroaminoto No.1, Sampit, Kec. Delta Pawan,
                                                Kabupaten Ketapang, Kalimantan Barat 78811</div>
                                        </div>
                                    </div>

                                    <div class="column col-md-4 col-sm-6 col-xs-12">
                                        <div class="info-box wow zoomInStable" data-wow-delay="500ms"
                                            data-wow-duration="1500ms">
                                            <!--icon-box-->
                                            <div class="icon-box">
                                                <span class="flaticon-mail-3"></span>
                                            </div>

                                            <h3>Email Address</h3>
                                            <div class="text">dinsos@ketapangkab.go.id<br><br></div>
                                        </div>
                                    </div>

                                    <div class="column col-md-4 col-sm-6 col-xs-12">
                                        <div class="info-box wow zoomInStable" data-wow-delay="1000ms"
                                            data-wow-duration="1500ms">
                                            <!--icon-box-->
                                            <div class="icon-box">
                                                <span class="flaticon-technology"></span>
                                            </div>

                                            <h3>Phone Number</h3>
                                            <div class="text"> (0534) 32160 <br><br></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </section>


                    </div>
                </div>
                <!--Content Side-->


            </div>
        </div>
        <section class="map-section">

            <!--Map Canvas-->
            <div class="map-canvas"">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.777765274837!2d109.97580015313073!3d-1.832541174203748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05185f1b8755ef%3A0xca2a323d56b50425!2sDinas%20Sosial%2C%20Pemberdayaan%20Perempuan%2C%20Perlindungan%20Anak%20Dan%20Keluarga%20Berencana!5e0!3m2!1sen!2sid!4v1680063532121!5m2!1sen!2sid"
                    width="1580" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </section>

    </div>
@endsection
