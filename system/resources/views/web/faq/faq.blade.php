@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{ url('public') }}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>FAQ's</h1>
        </div>

        <!--page-info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Faq</li>
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
                        <div class="row clearfix">
                            
                            <!--Accordions Column-->
                            <div class="column col-md-12 col-sm-12 col-xs-12">
                                <div class="inner-box">

                                    <div class="sec-title-one">
                                        <h2>Pertanyaan sering diajukan DSP3AKB KABUPATEN KETAPANG</h2>
                                    </div>

                                    <!--Accordion Box-->
                                    <ul class="accordion-box">

                                        @foreach ($list_faq as $item)
                                            <!--Block-->
                                            <li class="accordion block wow fadeInUp" data-wow-delay="0ms"
                                                data-wow-duration="1500ms">
                                                <div class="acc-btn">
                                                    <div class="icon-outer"><span class="icon icon-plus fa fa-plus"></span>
                                                        <span class="icon icon-minus flaticon-minus-symbol"></span>
                                                    </div>
                                                    {{$item['faq_pertanyaan']}}
                                                </div>
                                                <div class="acc-content">
                                                    <div class="content clearfix">
                                                        <figure class="image"><img src="images/resource/featured-thumb-1.jpg"
                                                                alt=""></figure>
                                                        <p>{!!$item['faq_jawaban']!!}</p>
                                                    </div>
                                                </div>
                                            </li>                                            
                                        @endforeach

                                    </ul><!--End Accordion Box-->
                                </div>
                            </div>

                        </div>
                    </section>

                </div>
                <!--Content Side-->


            </div>
        </div>
    </div>
@endsection
