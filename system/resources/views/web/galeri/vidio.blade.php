@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{ url('public') }}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Vidio</h1>
        </div>

        <!--page-info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Vidio</li>
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
                    <section class="news-outer">
                        <div class="sec-title-one">
                            <h2 style="font-size: 30px">Galeri Vidio</h2> <br>
                        </div>
                        <div class="row clearfix">

                            <div class="column left-column col-md-4 col-sm-12 col-xs-12">
                                <iframe width="100%" height="238px"
                                    src="https://www.youtube.com/embed/LjWr5QT0YN0?si=-f3fRfHi1P93pju_"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="column left-column col-md-4 col-sm-12 col-xs-12">
                                <iframe width="100%" height="238px" src="https://www.youtube.com/embed/34z6k8U62bM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>

                            <div class="column left-column col-md-4 col-sm-12 col-xs-12">
                                <iframe width="100%" height="238px" src="https://www.youtube.com/embed/34z6k8U62bM"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </section>
                </div>
                <!--Content Side-->


            </div>
        </div>
    </div>
@endsection
