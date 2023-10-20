@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Struktur Organisasi {{$config['singkatan_website']}}</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Struktur Organisasi</li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>
    
    <!--struktur organisasi-->
    <section class="service-style-one">
        <div class="auto-container">
            <div class="row clearfix">
                
                <div class="col-md-12 col-sm-12">

                    <div class="text" style="color: #393939; font-size: 26px"><strong>Struktur Organisasi {{$config['singkatan_website']}}</strong></div>
                
                    <div class="row clearfix">
                        <!--service-block-->
                        <div class="service-block col-md-12 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <img src="http://kantorkite.ketapangkab.go.id/public/{{$profil['struktur_organisasi']}}" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
