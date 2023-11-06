@extends('components.base.base')
@section('content')
    <!--Title-->
    <section class="page-title" style="background-image:url({{ url('public') }}/assets/images/background/17580.jpg);">
        <div class="auto-container">
            <h1>Laporan SKM</h1>
        </div>

        <!--page-info-->
        <div class="page-info">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <ul class="bread-crumb clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Laporan SKM</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">

                <!--Content Side-->
                <div class="content-side col-lg-12 col-md-8 col-sm-12 col-xs-12">
                    <div class="sec-title-one">
                        <h2 style="font-size: 30px">Laporan SKM {{$config['singkatan_website']}}</h2>
                    </div>
                    <section class="news-outer">
                        <div class="news-style-two">
                            <div class="inner-box">

                                <!--lower-content-->
                                <div class="lower-content">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col" style="width: 100px">No</th>
                                                <th scope="col">Nama Dokumen</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($list_laporanskm as $item)
                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td><a href="{{url('laporan-skm/detail-dokumen', $item['slug'])}}">{{$item['judul_publikasi']}}</a></td>
                                                </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
                <!--Content Side-->

            </div>
        </div>
    </div>
@endsection
