@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Visi dan Misi</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Visi dan Misi</li>
                        </ul>
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

                    <div class="sec-title-one">
                        <h2 style="font-size: 30px">Visi dan Misi {{$config['singkatan_website']}}</h2>
                    </div>
                
                    <div class="row clearfix">
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h2 style="color: #222; font-size: 30px">Visi</h2>
                                <div class="text">{!!$profil['visi']!!}</div>
                                
                            </div>
                        </div>
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h2 style="color: #222; font-size: 30px">Misi</h2>
                                <div class="text">{!!$profil['misi']!!}</div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
