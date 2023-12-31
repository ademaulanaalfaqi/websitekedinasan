@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Pegawai OPD</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Pegawai OPD</li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>

    <!--pegawai-->
    <section class="professionals">
    	<div class="auto-container">
        
        	<div class="sec-title-four">
            	<h2>Pegawai {{$config['singkatan_website']}}</h2>
            </div>
        	
        	<div class="row clearfix">
                @foreach ($list_pegawai as $item)
                    <div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                        <!--inner-box-->
                        <div class="inner-box">
                            <figure class="image" style="height: 350px; overflow: hidden;">
                                @if ($item['pegawai_gambar'])
                                    <img src="{{$item['pegawai_gambar']}}" alt="Foto Pegawai" style="width: 100%; height: 100%; object-fit: cover;"/>
                                @else
                                    
                                @endif
                            </figure>
                            
                            <div class="overlay-box">
                                <div class="lower-content">
                                    <h3>{{$item['nama']}}</h3>
                                    <div class="designation">{{$item['jabatan']}}</div>
                                </div>                            
                            </div>
                            
                        </div>
                    </div>                    
                @endforeach

            </div>
        </div>
    </section> 
@endsection

