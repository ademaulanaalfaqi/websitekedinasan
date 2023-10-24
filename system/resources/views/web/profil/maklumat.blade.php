@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Maklumat</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Maklumat</li>
                        </ul>
                    </div>
                
                </div>
            </div>
        </div>
        
    </section>

    <!--Default Section-->
    <section class="default-section">
    	<div class="auto-container">
            <div class="row clearfix">
            	
                <!--Text Column-->
                <div class="column text-column col-md-12 col-sm-12 col-xs-12">
                	<div class="inner-box">
                    
                    	<div class="sec-title-one">
                            <h2 style="font-size: 30px">Maklumat {{$config['singkatan_website']}}</h2> <br>
                            <h4 style="font-size: 20px" class="">{!!$profil['maklumat']!!}</h4>
                        </div>
                        
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </section>   
@endsection

