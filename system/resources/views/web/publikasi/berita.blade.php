@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Berita</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Berita</li>
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
                            <h2 style="font-size: 30px">Berita {{$config['singkatan_website']}}</h2> <br>
                        </div>
                    	<div class="row clearfix">
                        
                            @foreach ($list_berita as $item)
                                <div class="news-style-two col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box" style="height: 420px">
                                        <figure class="image" style="width: auto; height: 240px; overflow: hidden;">
                                            <a href="{{url('detail-berita', $item['slug'])}}"><img style="width: 100%; height: 100%; object-fit: cover;" src="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" alt="" /></a>
                                            
                                            <div class="date">
                                                {{$item['created_at']}}
                                            </div>
                                            
                                        </figure>
                                
                                        <!--lower-content-->
                                        <div class="lower-content">
                                            <h3><a href="{{url('detail-berita', $item['slug'])}}">{{$item['judul']}}</a></h3>
                                            
                                            <a class="read-more" href="{{url('detail-berita', $item['slug'])}}">READ MORE <span class="fa fa-angle-double-right"></span></a>
                                        </div>
                                
                                    </div>
                                </div>
                            @endforeach
                        
                        </div>
					</section>
					
                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-left padd-top-30">
                        <ul>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">--</a></li>
                            <li><a href="#">10</a></li>
                            <li><a class="next" href="#"><span class="fa fa-long-arrow-right"></span></a></li>
                        </ul>
                    </div>
                    
				</div>
                <!--Content Side-->


            </div>
        </div>
    </div>

    <!--berita-->
    <section class="services-column-two">
        <div class="auto-container">
            
            <!--Section Title-->
            <div class="sec-title-one">
                <h2>Berita {{$config['singkatan_website']}}</h2>
            </div>
            <div class="row clearfix border-1">
                @foreach ($list_berita as $item)
                    <!--Service block two-->
                    <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-box">
                                <figure class="image"><a href="{{url('detail-berita', $item['slug'])}}"><img src="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" alt=""></a></figure>
                            </div>
                            <div class="lower-content">
                                <div class="outer-link">
                                    <a href="{{url('detail-berita', $item['slug'])}}" class="theme-btn service-title"><span class="flaticon-clock"></span> {{$item['created_at']}}</a>
                                </div>
                                <div class="text">{{$item['judul']}}</div>
                                <div class="link-box"><a href="{{url('detail-berita', $item['slug'])}}" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                            </div>
                        </div>
                    </div>                    
                @endforeach
                
            </div>
            
            
        </div>
    </section>
@endsection