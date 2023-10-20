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

    <!--berita terbaru-->
    <section class="services-column-two">
        <div class="auto-container">
            
            <!--Section Title-->
            <div class="sec-title-one">
                <h2>Berita Terbaru {{$config['singkatan_website']}}</h2>
            </div>
            <div class="row clearfix">
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