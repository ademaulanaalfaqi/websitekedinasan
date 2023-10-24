@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Informasi</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Informasi</li>
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
                    	<div class="row clearfix">
                        
                            @foreach ($list_informasi as $item)
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
                                            <h3><a href="{{url('detail-berita', $item['slug'])}}">{{$item['judul_informasi']}}</a></h3>
                                            
                                            <a class="read-more" href="{{url('detail-berita', $item['slug'])}}">READ MORE <span class="fa fa-angle-double-right"></span></a>
                                        </div>
                                
                                    </div>
                                </div>
                            @endforeach
                        
                        </div>
					</section>
					
                    {{-- <!-- Styled Pagination -->
                    <div class="styled-pagination text-left padd-top-30">
                        <ul>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">--</a></li>
                            <li><a href="#">10</a></li>
                            <li><a class="next" href="#"><span class="fa fa-long-arrow-right"></span></a></li>
                        </ul>
                    </div> --}}
                    
				</div>
                <!--Content Side-->


            </div>
        </div>
    </div>
@endsection