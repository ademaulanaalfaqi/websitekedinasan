@extends('components.base.base')
@section('content')

    <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                
                    <section class="content-section services-content">
						<div class="lower-content">
                            <h3 style="color: #222; font-family: 'Source Sans Pro';"><strong>{{$dokumen_publik['judul_publikasi']}}</strong></h3>
                            <p>Dibuat pada {{$dokumen_publik['created_at']}}</p>
                        </div>
                    	<figure class="lower-image">
                            <a class="lightbox-image" href="http://kantorkite.ketapangkab.go.id/public/{{$dokumen_publik['foto']}}" title="{{$dokumen_publik['judul_publikasi']}}">
                                <img class="img-thumbnail" src="http://kantorkite.ketapangkab.go.id/public/{{$dokumen_publik['foto']}}" alt="">
                            </a>
                        </figure>
                        
                    </section>

				</div>
                <!--Content Side-->

				<!--Sidebar-->
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                    <aside class="sidebar about-sidebar">

                        <!-- Tabbed Links -->
                        <div class="sidebar-widget download-links">
                            <div class="sec-title-seven"><h2>Download Dokumen</h2></div>
                            <ul class="files">
                            	<li><a href="#"><span class="fa fa-file"></span> Nama File </a></li>
                            </ul>

                        </div>

                    </aside>


                </div>
                <!--Sidebar-->


            </div>
        </div>
    </div>
    
@endsection
