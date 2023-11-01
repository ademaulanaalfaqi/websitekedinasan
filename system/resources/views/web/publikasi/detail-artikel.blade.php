@extends('components.base.base')
@section('content')

    <!--Sidebar blog Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">

                        <div class="news-style-two">
                            <div class="inner-box">
                                <figure class="image">
                                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$artikel['foto']}}" alt="" />

                                </figure>
                                <br>
                                <!--lower-content-->
                                <ul>
                                    <li>
                                        <i class="fa fa-calender">{{$artikel['created_at']}}</i>
                                    </li>
                                </ul>
                                <div class="lower-content">
                                    {{-- <h3>{{$artikel['created_at']}}</h3><br> --}}
                                    <h3>{{$artikel['judul_artikel']}}</h3>
                                    <p>{!!$artikel['isi_artikel']!!}</p>

                                </div>

                            </div>
                        </div>


                    </section>

                </div>
                <!--Content Side-->

				<!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">


                    	<!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">

                            <div class="sec-title-seven"><h2>Post Terakhir</h2></div>

                            @foreach ($list_artikel as $item)
                                <article class="post">
                                    <figure class="post-thumb"><img src="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" alt=""></figure>
                                    <h4><a href="{{url('detail-artikel', $item['slug'])}}">{{$item['judul_artikel']}}</a></h4>
                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li>{{$item['created_at']}}</li>
                                    </ul>
                                </article>
                            @endforeach

                        </div>
                    </aside>
                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>

@endsection
