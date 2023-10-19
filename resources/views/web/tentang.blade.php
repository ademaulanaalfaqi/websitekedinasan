<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Brighton : Industry HTML Template | Home style one</title>
<!-- Stylesheets -->
<link href="/assets/css/bootstrap.css" rel="stylesheet">
<link href="/assets/css/revolution-slider.css" rel="stylesheet">
<link href="/assets/css/style.css" rel="stylesheet">
<!--Favicon-->
<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="/assets/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="/assets/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
        
    <!-- Preloader -->
    <div class="preloader"><div class="loader"><div class="cssload-container"><div class="cssload-speeding-wheel"></div></div></div></div>
 	
    <!-- Main Header-->
    <header class="main-header header-style-one">
        <!-- Header Top -->
    	<div class="header-top">
        	<div class="auto-container clearfix">
            	<!--Top Left-->
            	<div class="top-left pull-left">
                    <ul class="links-nav clearfix">
                        <li><span class="fa fa-bell-o"></span> Selamat datang di website {{$config['nama_website']}}</li>
                    </ul>
                </div>
                
                <!--Top Right-->
            	<div class="top-right pull-right">
                	<ul class="links-nav clearfix">
                    	<li><span class="fa fa-clock"></span> Senin - Jumat 08.00 - 16.00</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
    	<!--Header-Upper-->
        <div class="header-upper">
        	<div class="auto-container">
            	<div class="clearfix">
                	
                	<div class="pull-left logo-outer">
                    	<div class="logo" style="height: 90px">
                            <a href=""><img style="height: 100%" src="http://kantorkite.ketapangkab.go.id/public/{{ $config['logo'] }}" alt="Brighton" title="Brighton"></a>
                        </div>
                    </div>
                    
                    <div class="pull-right upper-right clearfix">
                    	
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-technology"></span></div>
                            <ul>
                                <li>Panggil Kami</li>
                            	<li><strong>{{$config['phone']}}</strong></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<div class="icon-box"><span class="flaticon-mail"></span></div>
                            <ul>
                                <li>Alamat Email</li>
                            	<li><strong>asj@skjs</strong></li>
                            </ul>
                        </div>
                        
                        <!--Info Box-->
                        <div class="upper-column info-box">
                        	<!--<div class="link-btn">
                            	<a href="#" class="theme-btn btn-style-one">get a quote</a>
                            </div>-->
                            
                            <div class="icon-box"><span class="flaticon-location-pin"></span></div>
                            <ul>
                                <li>Alamat</li>
                            	<li><strong>{{$config['alamat']}}</strong></li>
                            </ul>
                            
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
        
        <x-layout.header/>
    
    </header>
    <!--End Main Header -->
  
    <!--Title-->
    <section class="page-title" style="background-image:url(assets/images/background/bgbg.jpg);">
        <div class="auto-container">
            <h1>Tentang {{$config['singkatan_website']}}</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
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
                                    	<a class="lightbox-image" href="#" title="Image Caption Here"><img src="http://kantorkite.ketapangkab.go.id/public/{{ $profil['foto_tentang'] }}" alt="" /></a>
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
    
    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="lapor text-center">
                            <img src="assets/images/lapor.png" alt="">
                            <h1 style="color: #fff"><strong>SP4N-LAPOR!</strong></h1>
                            <a href="https://www.lapor.go.id/instansi/pemerintah-kabupaten-ketapang" class="btn btn-danger" target="_blank" style="font-size: 25px"><strong>BUAT LAPORAN</strong></a>
                        </div>
                    </div>
                </div> <hr>

                <div class="row clearfix">
                	
                    <!--Two 4th column-->
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-12 col-sm-6 col-xs-12 column">
                                <div class="footer-widget logo-widget">
                                    <div class="logo" style="height: 300px">
                                        <a href=""><img src="http://kantorkite.ketapangkab.go.id/public/{{ $config['logo'] }}" class="img-responsive" alt="" style="height: 100%;"></a>
                                    </div>
                                </div>
                            </div>
                    	</div>
                    </div>
                    <!--Two 4th column End-->

                    <!--Two 4th column-->
                    <div class="col-md-5 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            <div class="col-lg-12 col-sm-6 col-xs-12 column">
                                <div class="sec-title-three">
                                    <h2>Informasi {{ $config['singkatan_website'] }}</h2>
                                </div>
                                <div class="footer-widget logo-widget">
                                    <ul class="contact-info">
                                        <li><span class="icon flaticon-technology"></span> {{ $config['phone'] }}</li>
                                        <li><span class="icon flaticon-mail-2"></span> support@domain.com</li>
                                    	<li><span class="icon flaticon-pin"></span> {{ $config['alamat'] }}</li>
                                    </ul>
                                
                                </div>
                            </div>
                    	</div>
                    </div>
                    <!--Two 4th column End-->
                    
                    <!--Two 4th column-->
                    <div class="col-md-4 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                    		<!--Footer Column-->
                        	<div class="col-lg-6 col-sm-6 col-xs-12 column">
                            	<div class="footer-widget twitter-widget">
                                    <div class="sec-title-three">
                                        <h2>Link Terkait</h2>
                                    </div>
                                    <div class="footer-widget links-widget">
                                        <ul>
                                            <li><a href="https://ketapangkab.go.id/">Portal Ketapang</a></li>
                                            <li><a href="http://sintari.ketapangkab.go.id/">SINTARI</a></li>
                                            <li><a href="http://kantorkite.ketapangkab.go.id/">KantorKite</a></li>
                                        </ul>
            
                                    </div>
                                </div>
                            </div>
                    
                    	</div>
                    </div><!--Two 4th column End-->
                    
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
            	<div class="row clearfix">
                    <!--Copyright-->
                    <div class="col-md-12 col-sm-6 col-xs-12">
                        <div class="copyright text-center">2022 - @if(date("Y") > '2022') {{date("Y")}} @endif &copy; Brighton. </div>
                    </div>
                
                </div>
            </div>
        </div>
        
    </footer>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-long-arrow-up"></span></div>


<script src="/assets/js/jquery.js"></script> 
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/revolution.min.js"></script>
<script src="/assets/js/jquery.fancybox.pack.js"></script>
<script src="/assets/js/jquery.fancybox-media.js"></script>
<script src="/assets/js/owl.js"></script>
<script src="/assets/js/wow.js"></script>
<script src="/assets/js/script.js"></script>
</body>
</html>
