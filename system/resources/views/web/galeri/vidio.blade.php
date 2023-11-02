@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{ url('public') }}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Galeri Video</h1>
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
                        <div class="row clearfix">

                            @foreach ($list_vidio as $item)
                                <div class="column left-column col-md-4 col-sm-12 col-xs-12">
                                    <iframe width="100%" height="238px"
                                        src="https://www.youtube.com/embed/{{$item['link']}}"
                                        title="YouTube video player" frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>                                
                            @endforeach

                        </div>
                    </section>
                </div>
                <!--Content Side-->

                {{$list_vidio->links()}}

            </div>
        </div>
    </div>
@endsection
