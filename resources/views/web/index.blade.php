<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>{{$config['singkatan_website']}}</title>
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
  
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    @foreach ($slider as $item)
                        <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="assets/images/main-slider/1.jpg"  data-saveperformance="off"  data-title="Awesome Title Here">
                        <img src="assets/images/main-slider/anya.jpg"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                        
                        <!--Overlay-->
                        <div class="overlay-style-one"></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-110"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"><div class="border-title"></div></div>
                        
                        <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="10"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"><h2>Industry is the art of directing the<br>great source of Power</h2></div>
                        
                        </li>                        
                    @endforeach
                     
                </ul>
                
            	<div class="tp-bannertimer"></div>
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
    
    <!--tentang layanan-->
    <section class="testimonial-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--testimonial-column-->
            	<div class="testimonial-column col-md-12 col-sm-12 col-xs-12">
                	<div class="sec-title-two text-center">
                    	<h2>Tentang Layanan</h2>
                        <div class="text"><strong>Layanan DSP3AKB KABUPATEN KETAPANG</strong></div>
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

                    <div class="text"><strong>DSP3AKB KABUPATEN KETAPANG</strong></div>
                    <h2 style="color: #222; font-size: 36px">Visi Misi</h2>
                
                    <div class="row clearfix">
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h3>Visi</h3>
                                <div class="text">{!! $profil['visi'] !!}</div>
                                
                            </div>
                        </div>
                        <!--service-block-->
                        <div class="service-block col-md-6 col-sm-6 col-sm-12">
                            <div class="inner-box">
                                <!--icon-box-->
                                <div class="icon-box">
                                    <span class="flaticon-check"></span>
                                </div>
                                <h3>Misi</h3>
                                <div class="text">{!! $profil['misi'] !!}</div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--pegawai-->
    <section class="professionals">
    	<div class="auto-container">
        
        	<div class="sec-title-four">
            	<h2>Pegawai DKSJJDSJ ketapang</h2>
                <div class="text"><a href="">Pegawai Lainnya</a></div>
            </div>
        	
        	<div class="row clearfix">
            	<div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                	<!--inner-box-->
                	<div class="inner-box">
                    	<figure class="image">
                        	<img src="assets/images/resource/team-image-1.jpg" alt="" />
                        </figure>
                        
                        <div class="overlay-box">
                        	<div class="lower-content">
                        	<h3>MIKE DUDLEY</h3>
                            <div class="designation">- Chief Engineer -</div>                            
                        </div>
                        </div>
                        
                    </div>
                </div>
            	<div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                	<!--inner-box-->
                	<div class="inner-box">
                    	<figure class="image">
                        	<img src="assets/images/resource/team-image-1.jpg" alt="" />
                        </figure>
                        
                        <div class="overlay-box">
                        	<div class="lower-content">
                        	<h3>MIKE DUDLEY</h3>
                            <div class="designation">- Chief Engineer -</div>                            
                        </div>
                        </div>
                        
                    </div>
                </div>
            	<div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                	<!--inner-box-->
                	<div class="inner-box">
                    	<figure class="image">
                        	<img src="assets/images/resource/team-image-1.jpg" alt="" />
                        </figure>
                        
                        <div class="overlay-box">
                        	<div class="lower-content">
                        	<h3>MIKE DUDLEY</h3>
                            <div class="designation">- Chief Engineer -</div>                            
                        </div>
                        </div>
                        
                    </div>
                </div>
            	<div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                	<!--inner-box-->
                	<div class="inner-box">
                    	<figure class="image">
                        	<img src="assets/images/resource/team-image-1.jpg" alt="" />
                        </figure>
                        
                        <div class="overlay-box">
                        	<div class="lower-content">
                        	<h3>MIKE DUDLEY</h3>
                            <div class="designation">- Chief Engineer -</div>                            
                        </div>
                        </div>
                        
                    </div>
                </div>
            	<div class="team-style-one col-md-3 col-sm-6 col-xs-12">
                	<!--inner-box-->
                	<div class="inner-box">
                    	<figure class="image">
                        	<img src="assets/images/resource/team-image-1.jpg" alt="" />
                        </figure>
                        
                        <div class="overlay-box">
                        	<div class="lower-content">
                        	<h3>MIKE DUDLEY</h3>
                            <div class="designation">- Chief Engineer -</div>                            
                        </div>
                        </div>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--lokasi-->
    <div class="newsletter-style-one" style="background-image:url(images/background/newsletter-bg.png);">
    	<div class="auto-container">
        	<div class="sec-title-two">
            	<h2>Lokasi DKJS^&SHKH Ketapang</h2>
            </div>
        
        	<div class="row clearfix">
                <div class="col-md-12">
                    <div class="framee">
                        <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.8777554955929!2d109.97743307054328!3d-1.8327716084759398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e05185f1b8755ef%3A0xca2a323d56b50425!2sDinas%20Sosial%2C%20Pemberdayaan%20Perempuan%2C%20Perlindungan%20Anak%20Dan%20Keluarga%20Berencana!5e0!3m2!1sen!2sus!4v1697615081621!5m2!1sen!2sus" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
		</div>
    </div>
    
    <!--berita terbaru-->
    <section class="services-column-two">
    	<div class="auto-container">
        	
            <!--Section Title-->
            <div class="sec-title-one">
            	<h2>Berita Terbaru DKS@HDDH Ketapang</h2>
            </div>
			<div class="row clearfix">
            	
                <!--Service block two-->
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="services-details.html"><img src="assets/images/resource/service-image-1.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="outer-link">
                        		<a href="services-details.html" class="theme-btn service-title"><span class="flaticon-clock"></span> Agricultural processing</a>
                            </div>
                        	<div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                			<div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                        </div>
                    </div>
                </div>
                
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="services-details.html"><img src="assets/images/resource/service-image-2.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="outer-link">
                        		<a href="services-details.html" class="theme-btn service-title"><span class="flaticon-database"></span> Chemical Research</a>
                            </div>
                        	<div class="text">The way we all became the Brady Bunch and you know where you were then be to end. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi aperiam harum, voluptatum non fuga nostrum libero porro aut aspernatur, iure sed? Culpa necessitatibus minus similique eligendi cum cumque nulla recusandae? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae doloremque suscipit enim et ipsam eaque possimus quidem beatae sint ipsum laborum eos dolore atque ex, odio impedit laudantium ducimus accusamus.</div>
                			<div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
                        </div>
                    </div>
                </div>
                
                <div class="service-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
                    	<div class="image-box">
                        	<figure class="image"><a href="services-details.html"><img src="assets/images/resource/service-image-3.jpg" alt=""></a></figure>
                        </div>
                        <div class="lower-content">
                        	<div class="outer-link">
                        		<a href="services-details.html" class="theme-btn service-title"><span class="fa  fa-support"></span> Metal Engineering</a>
                            </div>
                        	<div class="text">The way we all became the Brady Bunch and you know where you were then be to end.</div>
                			<div class="link-box"><a href="services-details.html" class="theme-btn normal-link">VIEW MORE <span class="fa fa-long-arrow-right"></span></a></div>
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
