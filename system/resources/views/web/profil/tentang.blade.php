@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Tentang</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Tentang</li>
                        </ul>
                    </div>
                
                </div>
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
                                        <img src="http://kantorkite.ketapangkab.go.id/public/{{ $profil['foto_tentang'] }}" alt="" />
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
@endsection


