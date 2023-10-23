<!--Main Footer-->
<footer class="main-footer">
    	
    <!--Footer Upper-->        
    <div class="footer-upper">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="lapor text-center">
                        <img src="{{url('public')}}/assets/images/lapor.png" alt="">
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
                                    <a href=""><img src="http://kantorkite.ketapangkab.go.id/public/{{ $config['logo'] }}" class="img-responsive" alt="{{$config['singkatan_website']}}" style="height: 100%;"></a>
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