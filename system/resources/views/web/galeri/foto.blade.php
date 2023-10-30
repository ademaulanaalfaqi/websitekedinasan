@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{url('public')}}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Foto</h1>
        </div>
        
        <!--page-info-->
        <div class="page-info">
        	<div class="auto-container">
            	<div class="row clearfix">
            
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Foto</li>
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
                        <div class="sec-title-one">
                            <h2 style="font-size: 30px">Galeri Foto</h2> <br>
                        </div>
                    	<div class="row clearfix">
                        
                            @foreach ($list_foto as $item)
                                <div class="default-portfolio-item masonry-item col-md-4 col-sm-6 col-xs-12">
                                    <div class="inner-box" style="height: 300px">
                                        <figure class="image" style="width: auto; height: 240px; overflow: hidden;">
                                            <a class="lightbox-image" href="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}"><img style="width: 100%; height: 100%; object-fit: cover;" src="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" alt="" /></a>
                                        </figure>       
                                        <!--Overlay Box-->
                                        <div class="overlay-one" style="height: 300px">
                                            <div class="overlay-inner" style="width: 424px; height: 240px; overflow: hidden;">
                                                <div class="content">
                                                    <a href="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" class="lightbox-image proj-link" title="{{$item['judul']}}"><span class="fa fa-search"></span></a>
                                                </div>
                                            </div>
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