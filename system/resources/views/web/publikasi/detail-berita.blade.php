@extends('components.base.base')
@section('content')

    <!--Sidebar blog Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    <section class="news-outer">
                    	
                        <div class="news-style-two">
                            <div class="inner-box">
                                <figure class="image">
                                    <img src="http://kantorkite.ketapangkab.go.id/public/{{$berita['foto']}}" alt="" />
                                    
                                </figure>
                        
                                <!--lower-content-->
                                <div class="lower-content">
                                    <h3>{{$berita['judul']}}</h3>
                                    <p>{!!$berita['isi']!!}</p>
                        
                                </div>
                        
                            </div>
                        </div>
                            
                    
                    </section>
				
                </div>
                <!--Content Side-->

				<!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar news-sidebar">
                    
                    
                    	<!-- Recent Posts -->
                        <div class="sidebar-widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        
                            <div class="sec-title-seven"><h2>Post Terakhir</h2></div>	
                            
                            @foreach ($list_berita as $item)
                                <article class="post">
                                    <figure class="post-thumb"><img src="http://kantorkite.ketapangkab.go.id/public/{{$item['foto']}}" alt=""></figure>
                                    <h4><a href="{{url('detail-berita', $item['slug'])}}">{{$item['judul']}}</a></h4>
                                    <!--post-meta-->
                                    <ul class="post-meta">
                                        <li>{{$item['created_at']}}</li>
                                    </ul>
                                </article>                                
                            @endforeach
                        
                        </div>
                    </aside>
                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>
    
@endsection
